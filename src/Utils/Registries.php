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

namespace Lazuli\Utils;

use Lazuli\Blocks\LazuliBlocks;
use Lazuli\Blocks\LazuliBlocksInputs;
use Nexly\Events\Impl\BlockRegistryEvent;
use Nexly\Events\NexlyEventManager as NexlyEvent;
use pocketmine\block\VanillaBlocks;
use pocketmine\entity\effect\VanillaEffects;
use pocketmine\item\enchantment\VanillaEnchantments;
use pocketmine\item\VanillaItems;
use pocketmine\plugin\DisablePluginException;

/**
 * @internal
 */
class Registries
{
	private static bool $loaded = false;
	private static bool $initialized = false;

	/**
	 * @deprecated
	 */
	public static function setup() : void
	{
		self::$loaded = true;

		VanillaEffects::getAll();
		VanillaEnchantments::getAll();
		VanillaItems::getAll();
		VanillaBlocks::getAll();
	}

	/**
	 * @return void
	 */
	public static function inject() : void
	{
		NexlyEvent::getInstance()->listen(BlockRegistryEvent::class, static function (BlockRegistryEvent $ev) : void {
			LazuliBlocksInputs::$registry = $ev;
			self::init();
		});
	}

	/**
	 * @return void
	 */
	public static function init() : void
	{
		if (!self::$initialized) {
			self::setup();
		}

		self::$initialized = true;
		LazuliBlocks::getAll();
	}

	/**
	 * @return void
	 */
	public static function validate() : void
	{
		if (!self::$loaded) {
			throw new DisablePluginException("Vanilla registries have not been loaded. Call Registries::setup() or Registries::init() first.");
		}

		if (!self::$initialized) {
			throw new DisablePluginException("Lazuli registries have not been initialized. Call Registries::init() first.");
		}
	}
}
