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
	}
}
