<?php

/*
 *
 *  _                       _ _
 * | |                     | (_)
 * | |     __ _ _____   _  | |_
 * | |    / _` |_  / | | | | | |
 * | |___| (_| |/ /| |_| | | | |
 * \____/ \__,_/___|\__,_|_|_|_|
 *
 * Lazuli - A PocketMine-MP plugin adding missing vanilla blocks.
 *
 * Copyright 2026 Zwuiix
 * Licensed under the Apache License, Version 2.0.
 *
 * You may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * @author Zwuiix
 * @link https://github.com/Zwuiix-cmd/Lazuli
 *
 *
 */

namespace Lazuli;

use Lazuli\Blocks\LazuliBlocks;
use Lazuli\Utils\Registries;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;
use Symfony\Component\Filesystem\Path;
use zwuiix\extpack\ExtPack;
use function count;
use function implode;
use function sprintf;

class Lazuli extends PluginBase
{
	protected function onLoad() : void
	{
		$this->saveResource("Lazuli.zip");
		Registries::inject();
	}

	protected function onEnable() : void
	{
		Registries::validate();
		$this->getLogger()->notice(sprintf("%d blocks loaded", count(LazuliBlocks::getAll())));

		ExtPack::fromPath(Path::join($this->getDataFolder(), "Lazuli.zip"));
	}

	/**
	 * @param CommandSender $sender
	 * @param Command       $command
	 * @param string        $label
	 * @param array         $args
	 * @return bool
	 */
	public function onCommand(CommandSender $sender, Command $command, string $label, array $args) : bool
	{
		if ($command->getName() === "lazuli") {
			$desc = $this->getDescription();
			$authors = implode(", ", $desc->getAuthors());
			$version = $desc->getVersion();
			$apis = implode(", ", $desc->getCompatibleApis());

			$sender->sendMessage(TextFormat::MATERIAL_LAPIS . "Lazuli " . TextFormat::GREEN . "v" . $version . TextFormat::GRAY . " ($apis)");
			$sender->sendMessage(TextFormat::WHITE . "Author: " . TextFormat::MATERIAL_LAPIS . $authors);
			$sender->sendMessage(TextFormat::WHITE . "Loaded blocks: " . TextFormat::MATERIAL_LAPIS . count(LazuliBlocks::getAll()));

			return true;
		}

		return parent::onCommand($sender, $command, $label, $args);
	}
}
