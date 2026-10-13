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

namespace Lazuli\Blocks;

use pocketmine\block\Stair;
use pocketmine\item\Item;
use pocketmine\item\Potion;
use pocketmine\item\PotionType;
use pocketmine\item\SplashPotion;
use pocketmine\math\Vector3;
use pocketmine\player\Player;
use pocketmine\world\sound\WaterSplashSound;

class DirtStair extends Stair
{
	public function onInteract(Item $item, int $face, Vector3 $clickVector, ?Player $player = null, array &$returnedItems = []) : bool
	{
		if (!$this->position->isValid()) {
			return false;
		}

		$world = $this->position->getWorld();
		if (($item instanceof Potion || $item instanceof SplashPotion) && $item->getType() === PotionType::WATER) {
			$item->pop();
			$world->setBlock($this->position, LazuliBlocks::MUD_STAIRS()
				->setFacing($this->getFacing())
				->setShape($this->getShape())
				->setUpsideDown($this->isUpsideDown())
			);
			$world->addSound($this->position, new WaterSplashSound(0.5));
			return true;
		}

		return false;
	}
}
