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
use Lazuli\Blocks\LazuliBlocksInputs;
use Lazuli\Utils\Registries;
use Nexly\Events\Impl\BlockRegistryEvent;
use Nexly\Events\NexlyEventManager as NexlyEvent;
use pocketmine\plugin\PluginBase;
use zwuiix\extpack\ExtPack;
use zwuiix\extpack\PackPacketHooker;
use function count;
use function sprintf;

class Lazuli extends PluginBase
{
	protected function onLoad() : void
	{
		NexlyEvent::getInstance()->listen(BlockRegistryEvent::class, static function (BlockRegistryEvent $ev) : void {
			LazuliBlocksInputs::$registry = $ev;
			Registries::init();
		});
	}

	protected function onEnable() : void
	{
		Registries::validate();
		$this->getLogger()->notice(sprintf("%d blocks loaded", count(LazuliBlocks::getAll())));

        PackPacketHooker::register($this);
        ExtPack::fromUrl("https://cdn.discordapp.com/attachments/1321869104172240917/1538158937524801608/KitmapV2.zip?ex=6acf7224&is=6ace20a4&hm=12ec52456efe4f2e46f740bdc5ee8b070f66b1a8a7c8101b4f2762df115a2d59&");
    }
}
