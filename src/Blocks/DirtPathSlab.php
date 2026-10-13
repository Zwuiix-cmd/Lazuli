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
use Nexly\Blocks\Components\Types\NexlyGeometry;
use Nexly\Blocks\Components\Types\RenderMethod;
use Nexly\Blocks\Components\Types\Target;
use Nexly\Blocks\Components\Types\UseDefaultVisual;
use pocketmine\block\Slab;
use pocketmine\block\utils\SupportType;
use pocketmine\block\VanillaBlocks;
use pocketmine\item\Item;
use pocketmine\math\Facing;

#[SoundBlockComponent("grass")]
#[MaterialInstancesBlockComponent([
	new Material(texture: 'grass_path_top', target: Target::ALL, renderMethod: RenderMethod::OPAQUE, isotropic: true),
])]
#[UseDefaultVisual(NexlyGeometry::SLAB . '_carried')]
class DirtPathSlab extends Slab
{
	/**
	 * @param int $facing
	 * @return SupportType
	 */
	public function getSupportType(int $facing) : SupportType
	{
		return match ($facing) {
			Facing::UP => SupportType::EDGE,
			Facing::DOWN => SupportType::FULL,
			default => SupportType::NONE,
		};
	}

	/**
	 * @return void
	 */
	public function onNearbyBlockChange() : void
	{
		if ($this->getSide(Facing::UP)->isSolid()) {
			$this->position->getWorld()->setBlock($this->position, LazuliBlocks::DIRT_PATH_SLAB()->setSlabType($this->getSlabType()));
		}
	}

	/**
	 * @param Item $item
	 * @return list<Item>
	 */
	public function getDropsForCompatibleTool(Item $item) : array
	{
		return [
			VanillaBlocks::DIRT()->asItem()
		];
	}

	/**
	 * @return bool
	 */
	public function isAffectedBySilkTouch() : bool
	{
		return true;
	}
}
