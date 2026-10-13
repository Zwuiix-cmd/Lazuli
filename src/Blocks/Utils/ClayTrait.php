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

namespace Lazuli\Blocks\Utils;

use pocketmine\item\Item;
use pocketmine\item\VanillaItems;

trait ClayTrait
{
	public function getDropsForCompatibleTool(Item $item) : array
	{
		return [
			VanillaItems::CLAY()->setCount(4)
		];
	}

	public function isAffectedBySilkTouch() : bool
	{
		return true;
	}
}
