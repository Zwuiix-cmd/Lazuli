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

use Nexly\Blocks\Components\MaterialInstancesBlockComponent;
use Nexly\Blocks\Components\SoundBlockComponent;
use Nexly\Blocks\Components\Types\Material;
use Nexly\Blocks\Components\Types\RenderMethod;
use Nexly\Blocks\Components\Types\Target;
use Nexly\Blocks\Components\Types\UseDefaultVisual;
use pocketmine\block\Stair;
use pocketmine\block\Transparent;
use pocketmine\block\utils\BlockEventHelper;
use pocketmine\item\Item;
use pocketmine\math\Facing;
use function mt_rand;

#[SoundBlockComponent("grass")]
#[MaterialInstancesBlockComponent([
	new Material(texture: 'mycelium_top', target: Target::ALL, renderMethod: RenderMethod::OPAQUE, isotropic: true),
])]
#[UseDefaultVisual]
class MyceliumStair extends Stair
{
	public function getDropsForCompatibleTool(Item $item) : array
	{
		return [
			LazuliBlocks::DIRT_STAIRS()->asItem()
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
		//TODO: light levels
		$x = mt_rand($this->position->x - 1, $this->position->x + 1);
		$y = mt_rand($this->position->y - 2, $this->position->y + 2);
		$z = mt_rand($this->position->z - 1, $this->position->z + 1);
		$world = $this->position->getWorld();
		$block = $world->getBlockAt($x, $y, $z);
		if ($block instanceof DirtStair) {
			if ($block->getSide(Facing::UP) instanceof Transparent) {
				BlockEventHelper::spread($block, LazuliBlocks::MYCELIUM_STAIRS()
					->setFacing($this->getFacing())
					->setShape($block->getShape())
					->setUpsideDown($block->isUpsideDown()), $this
				);
			}
		}
	}
}
