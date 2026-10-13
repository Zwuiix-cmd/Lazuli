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

use pocketmine\block\utils\Fallable;
use pocketmine\block\utils\FallableTrait as PMFallableTrait;
use pocketmine\entity\object\FallingBlock;
use pocketmine\event\entity\EntityBlockChangeEvent;
use pocketmine\math\Facing;

trait FallableTrait{
	use PMFallableTrait {
		onNearbyBlockChange as onChange;
	}

	public function onNearbyBlockChange() : void
	{
		parent::onNearbyBlockChange();
		$this->onChange();
	}

	public function onHitGround(FallingBlock $blockEntity) : bool{
		$loc = $blockEntity->getLocation();
		$world = $loc->getWorld();

		$pos = $loc->floor();
		if(!$world->getBlock($pos)->canBeReplaced()){
			$pos = $pos->getSide(Facing::UP);
		}

		$targetBlock = $world->getBlock($pos);
		if($targetBlock->canBeReplaced() && $world->isInWorld($pos->getFloorX(), $pos->getFloorY(), $pos->getFloorZ())){
			$blockResult = $this->tickFalling() ?? $this;

			$ev = new EntityBlockChangeEvent($blockEntity, $targetBlock, $blockResult);
			$ev->call();
			if(!$ev->isCancelled()){
				$b = $ev->getTo();
				$world->setBlock($pos, $b);

				$placed = $world->getBlock($pos);
				$placed->onNearbyBlockChange();

				if($b instanceof Fallable && ($sound = $b->getLandSound()) !== null){
					$world->addSound($pos->add(0.5, 0.5, 0.5), $sound);
				}
			}
		}

		return false;
	}
}
