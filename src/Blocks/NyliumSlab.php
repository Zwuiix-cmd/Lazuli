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

use pocketmine\block\Slab;
use pocketmine\block\utils\BlockEventHelper;
use pocketmine\item\Item;
use pocketmine\math\Facing;
use pocketmine\utils\Random;

class NyliumSlab extends Slab
{
	/**
	 * @return array|Item[]
	 */
	public function getDropsForCompatibleTool(Item $item) : array
	{
		return [
			LazuliBlocks::NETHERRACK_SLAB()->asItem()
		];
	}

	public function isAffectedBySilkTouch() : bool
	{
		return true;
	}

	public function ticksRandomly() : bool
	{
		return true;
	}

	public function onRandomTick() : void
	{
		$world = $this->position->getWorld();
		$above = $this->getSide(Facing::UP);
		if (!$above->isTransparent()) {
			BlockEventHelper::spread($this, LazuliBlocks::NETHERRACK_SLAB()
				->setSlabType($this->getSlabType()), $this
			);
			return;
		}

		$random = new Random();
		for ($i = 0; $i < 4; ++$i) {
			$pos = $this->position->add($random->nextRange(-1, 1), $random->nextRange(-2, 0), $random->nextRange(-1, 1));
			$block = $world->getBlock($pos);
			if ($block instanceof NetherrackSlab && $world->getBlock($pos->up())->isTransparent()) {
				BlockEventHelper::spread($block, clone $this
					->setSlabType($block->getSlabType()), $this
				);
			}
		}
	}
}
