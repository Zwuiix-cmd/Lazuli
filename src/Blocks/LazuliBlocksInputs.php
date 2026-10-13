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

use Nexly\Blocks\Vanilla\NexlyFence as Fence;
use Nexly\Events\Impl\BlockRegistryEvent;
use pocketmine\block\Block;
use pocketmine\block\BlockBreakInfo as BreakInfo;
use pocketmine\block\BlockIdentifier as BID;
use pocketmine\block\BlockToolType as ToolType;
use pocketmine\block\BlockTypeIds;
use pocketmine\block\BlockTypeInfo as Info;
use pocketmine\block\BlockTypeTags as Tags;
use pocketmine\block\FenceGate;
use pocketmine\block\Slab;
use pocketmine\block\Stair;
use pocketmine\block\tile\Tile;
use pocketmine\block\utils\Colored;
use pocketmine\block\utils\DyeColor;
use pocketmine\block\utils\WoodType;
use pocketmine\block\Wall;
use pocketmine\item\ToolTier;
use pocketmine\utils\RegistrySource;
use function strtolower;

class LazuliBlocksInputs extends RegistrySource
{
	public static ?BlockRegistryEvent $registry = null;

	public function getTargetClassName() : string{
		return "LazuliBlocks";
	}

	public function getTargetClassDocComment() : array{
		return [
			"Allows getting a new instance of any block implemented by Lazuli"
		];
	}

	public function cloneResults() : bool{ return true; }

	/**
	 * @phpstan-template TBlock of Block
	 * @phpstan-param \Closure(BID) : TBlock $createBlock
	 * @phpstan-param class-string<covariant Tile>|null $tileClass
	 * @phpstan-return TBlock
	 */
	private function register(string $name, \Closure $createBlock, ?string $tileClass = null) : Block{
		$typeId = BlockTypeIds::newId();
		$block = $createBlock(new BID($typeId, $tileClass));
		self::registerValue($name, $block);

		self::$registry?->register("lazuli:" . $name, static fn(int $id) : Block => $createBlock(new BID($typeId, $tileClass)));

		return $block;
	}

	/**
	 * @phpstan-template TBlock of Colored
	 * @phpstan-param \Closure(BID, DyeColor) : TBlock $createBlock
	 */
	private function registerColored(string $suffix, \Closure $createBlock) : void{
		foreach(DyeColor::cases() as $color){
			$id = strtolower($color->name) . "_" . $suffix;
			self::register($id, static fn(BID $bid) => $createBlock($bid, $color)->setColor($color));
		}
	}

	protected function setup() : void{
		$woolInfo = static fn() => new Info(new BreakInfo(0.8, ToolType::SHEARS));
		$concreteInfo = static fn() => new Info(BreakInfo::pickaxe(1.8, ToolTier::WOOD));
		$concretePowderInfo = static fn() => new Info(BreakInfo::shovel(0.5));
		$obsidianInfo = static fn() => new Info(BreakInfo::pickaxe(35.0 /* 50 in PC */,  ToolTier::DIAMOND, 6000.0));
		$endStoneInfo = static fn() => new Info(BreakInfo::pickaxe(3.0, ToolTier::WOOD, 45.0));
		$calciteInfo = static fn() => new Info(BreakInfo::pickaxe(0.75, ToolTier::WOOD));
		$amethystInfo = static fn() => new Info(BreakInfo::pickaxe(1.5, ToolTier::WOOD));
		$mossInfo = static fn() => new Info(BreakInfo::shovel(0.1, blastResistance: 2.5), [Tags::DIRT]);
		$dripstoneInfo = static fn() => new Info(BreakInfo::pickaxe(1.5));
		$snowInfo = static fn() => new Info(BreakInfo::shovel(0.2, ToolTier::WOOD));
		$packedIceInfo = static fn() => new Info(BreakInfo::pickaxe(0.5));
		$blueIceInfo = static fn() => new Info(BreakInfo::pickaxe(2.8));
		$sandInfo = static fn() => new Info(BreakInfo::shovel(0.5), [Tags::SAND]);
		$gravelInfo = static fn() => new Info(BreakInfo::shovel(0.6));
		$dirtInfo = static fn() => new Info(BreakInfo::shovel(0.5), [Tags::DIRT]);
		$dirtPathInfo = static fn() => new Info(BreakInfo::shovel(0.65));
		$myceliumInfo = static fn() => new Info(BreakInfo::shovel(0.6), [Tags::DIRT]);
		$grassInfo = static fn() => new Info(BreakInfo::shovel(0.6), [Tags::DIRT]);
		$soulSoilInfo = static fn() => new Info(BreakInfo::shovel(0.5));
		$netherrackInfo = static fn() => new Info(BreakInfo::pickaxe(0.4, ToolTier::WOOD));
		$nyliumInfo = static fn() => new Info(BreakInfo::pickaxe(0.4, ToolTier::WOOD), [Tags::NYLIUM]);
		$wartInfo = static fn() => new Info(new BreakInfo(1.0, ToolType::HOE));
		$suspiciousInfo = static fn() => new Info(BreakInfo::shovel(0.25, blastResistance: 1.25));
		$packedMudInfo = static fn() => new Info(BreakInfo::pickaxe(1.0, null, 15.0));

		self::registerColored("wool_wall", static fn(BID $id, DyeColor $color) => new WoolWall($id, $color->getDisplayName() . " Wool Wall", $woolInfo()));
		self::registerColored("wool_fence", static fn(BID $id, DyeColor $color) => new WoolFence($id, $color->getDisplayName() . " Wool Fence", $woolInfo()));
		self::registerColored("wool_fence_gate", static fn(BID $id, DyeColor $color) => new WoolFenceGate($id, $color->getDisplayName() . " Wool Fence Gate", $woolInfo(), WoodType::OAK));

		self::registerColored("concrete_wall", static fn(BID $id, DyeColor $color) => new ConcreteWall($id, $color->getDisplayName() . " Concrete Wall", $concreteInfo()));
		self::registerColored("concrete_fence", static fn(BID $id, DyeColor $color) => new ConcreteFence($id, $color->getDisplayName() . " Concrete Fence", $concreteInfo()));
		self::registerColored("concrete_fence_gate", static fn(BID $id, DyeColor $color) => new ConcreteFenceGate($id, $color->getDisplayName() . " Concrete Fence Gate", $concreteInfo(), WoodType::OAK));

		self::registerColored("concrete_powder_slab", static fn(BID $id) => new ConcretePowderSlab($id, "Concrete Powder Slab", $concretePowderInfo()));
		self::registerColored("concrete_powder_stairs", static fn(BID $id) => new ConcretePowderStair($id, "Concrete Powder Stair", $concretePowderInfo()));

		self::register("packed_mud_slab", static fn(BID $id) => new Slab($id, "Packed Mud Slab", $packedMudInfo()));
		self::register("packed_mud_stairs", static fn(BID $id) => new Stair($id, "Packed Mud Stair", $packedMudInfo()));
		self::register("packed_mud_fence", static fn(BID $id) => new Fence($id, "Packed Mud Fence", $packedMudInfo()));
		self::register("packed_mud_fence_gate", static fn(BID $id) => new FenceGate($id, "Packed Mud Fence Gate", $packedMudInfo(), WoodType::OAK));

		self::register("suspicious_sand_slab", static fn(BID $id) => new FallableSlab($id, "Suspicious Sand Slab", $suspiciousInfo()));
		self::register("suspicious_sand_stairs", static fn(BID $id) => new FallableStair($id, "Suspicious Sand Stair", $suspiciousInfo()));

		self::register("suspicious_gravel_slab", static fn(BID $id) => new GravelSlab($id, "Suspicious Gravel Slab", $suspiciousInfo()));
		self::register("suspicious_gravel_stairs", static fn(BID $id) => new GravelStair($id, "Suspicious Gravel Stair", $suspiciousInfo()));

		self::register("nether_wart_slab", static fn(BID $id) => new Slab($id, "Nether Wart Slab", $wartInfo()));
		self::register("nether_wart_stairs", static fn(BID $id) => new Stair($id, "Nether Wart Stair", $wartInfo()));
		self::register("nether_wart_fence", static fn(BID $id) => new Fence($id, "Nether Wart Fence", $wartInfo()));
		self::register("nether_wart_fence_gate", static fn(BID $id) => new FenceGate($id, "Nether Wart Fence Gate", $wartInfo(), WoodType::WARPED));

		self::register("warped_wart_slab", static fn(BID $id) => new Slab($id, "Warped Wart Slab", $wartInfo()));
		self::register("warped_wart_stairs", static fn(BID $id) => new Stair($id, "Warped Wart Stair", $wartInfo()));
		self::register("warped_wart_fence", static fn(BID $id) => new Fence($id, "Warped Wart Fence", $wartInfo()));
		self::register("warped_wart_fence_gate", static fn(BID $id) => new FenceGate($id, "Warped Wart Fence Gate", $wartInfo(), WoodType::WARPED));

		self::register("crimson_nylium_slab", static fn(BID $id) => new NyliumSlab($id, "Crimson Nylium Slab", $nyliumInfo()));
		self::register("crimson_nylium_stairs", static fn(BID $id) => new NyliumStair($id, "Crimson Nylium Stair", $nyliumInfo()));

		self::register("warped_nylium_slab", static fn(BID $id) => new NyliumSlab($id, "Warped Nylium Slab", $nyliumInfo()));
		self::register("warped_nylium_stairs", static fn(BID $id) => new NyliumStair($id, "Warped Nylium Stair", $nyliumInfo()));

		self::register("netherrack_slab", static fn(BID $id) => new NetherrackSlab($id, "Netherrack Slab", $netherrackInfo()));
		self::register("netherrack_stairs", static fn(BID $id) => new NetherrackStair($id, "Netherrack Stair", $netherrackInfo()));
		self::register("netherrack_wall", static fn(BID $id) => new NetherrackWall($id, "Netherrack Wall", $netherrackInfo()));

		self::register("soul_soil_slab", static fn(BID $id) => new SoulSoilSlab($id, "Soul Soil Slab", $soulSoilInfo()));
		self::register("soul_soil_stairs", static fn(BID $id) => new SoulSoilStair($id, "Soul Soil Stair", $soulSoilInfo()));

		self::register("grass_slab", static fn(BID $id) => new GrassSlab($id, "Grass Slab", $grassInfo()));
		self::register("grass_stairs", static fn(BID $id) => new GrassStair($id, "Grass Stair", $grassInfo()));

		self::register("podzol_slab", static fn(BID $id) => new PodzolSlab($id, "Podzol Slab", $dirtInfo()));
		self::register("podzol_stairs", static fn(BID $id) => new PodzolStair($id, "Podzol Stair", $dirtInfo()));

		self::register("mycelium_slab", static fn(BID $id) => new MyceliumSlab($id, "Mycelium Slab", $myceliumInfo()));
		self::register("mycelium_stairs", static fn(BID $id) => new MyceliumStair($id, "Mycelium Stair", $myceliumInfo()));

		self::register("dirt_path_slab", static fn(BID $id) => new DirtPathSlab($id, "Dirt Path Slab", $dirtPathInfo()));
		self::register("dirt_path_stairs", static fn(BID $id) => new DirtPathStair($id, "Dirt Path Stair", $dirtPathInfo()));

		self::register("dirt_slab", static fn(BID $id) => new DirtSlab($id, "Dirt Slab", $dirtInfo()));
		self::register("dirt_stairs", static fn(BID $id) => new DirtStair($id, "Dirt Stair", $dirtInfo()));

		self::register("dirt_with_roots_slab", static fn(BID $id) => new Slab($id, "Rooted Dirt Slab", $dirtInfo()));
		self::register("dirt_with_roots_stairs", static fn(BID $id) => new Stair($id, "Rooted Dirt Stair", $dirtInfo()));

		self::register("coarse_dirt_slab", static fn(BID $id) => new Slab($id, "Coarse Dirt Slab", $dirtInfo()));
		self::register("coarse_dirt_stairs", static fn(BID $id) => new Stair($id, "Coarse Dirt Stair", $dirtInfo()));

		self::register("mud_slab", static fn(BID $id) => new Slab($id, "Mud Slab", $gravelInfo()));
		self::register("mud_stairs", static fn(BID $id) => new Stair($id, "Mud Stair", $gravelInfo()));

		self::register("clay_slab", static fn(BID $id) => new ClaySlab($id, "Clay Slab", $gravelInfo()));
		self::register("clay_stairs", static fn(BID $id) => new ClayStair($id, "Clay Stair", $gravelInfo()));

		self::register("gravel_slab", static fn(BID $id) => new GravelSlab($id, "Gravel Slab", $gravelInfo()));
		self::register("gravel_stairs", static fn(BID $id) => new GravelStair($id, "Gravel Stair", $gravelInfo()));

		self::register("sand_slab", static fn(BID $id) => new FallableSlab($id, "Sand Slab", $sandInfo()));
		self::register("sand_stairs", static fn(BID $id) => new FallableStair($id, "Sand Stair", $sandInfo()));

		self::register("red_sand_slab", static fn(BID $id) => new FallableSlab($id, "Red Sand Slab", $sandInfo()));
		self::register("red_sand_stairs", static fn(BID $id) => new FallableStair($id, "Red Sand Stair", $sandInfo()));

		self::register("packed_ice_slab", static fn(BID $id) => new Slab($id, "Packed Ice Slab", $packedIceInfo()));
		self::register("packed_ice_stairs", static fn(BID $id) => new Stair($id, "Packed Ice Stair", $packedIceInfo()));

		self::register("blue_ice_slab", static fn(BID $id) => new Slab($id, "Blue Ice Slab", $blueIceInfo()));
		self::register("blue_ice_stairs", static fn(BID $id) => new Stair($id, "Blue Ice Stair", $blueIceInfo()));

		self::register("snow_slab", static fn(BID $id) => new Slab($id, "Snow Slab", $snowInfo()));
		self::register("snow_stairs", static fn(BID $id) => new Stair($id, "Snow Stair", $snowInfo()));

		self::register("dripstone_slab", static fn(BID $id) => new Slab($id, "Dripstone Slab", $dripstoneInfo()));
		self::register("dripstone_stairs", static fn(BID $id) => new Stair($id, "Dripstone Stair", $dripstoneInfo()));
		self::register("dripstone_wall", static fn(BID $id) => new Wall($id, "Dripstone Wall", $dripstoneInfo()));

		self::register("moss_slab", static fn(BID $id) => new Slab($id, "Moss Slab", $mossInfo()));
		self::register("moss_stairs", static fn(BID $id) => new Stair($id, "Moss Stair", $mossInfo()));

		self::register("pale_moss_slab", static fn(BID $id) => new Slab($id, "Pale Moss Slab", $mossInfo()));
		self::register("pale_moss_stairs", static fn(BID $id) => new Stair($id, "Pale Moss Stair", $mossInfo()));

		self::register("amethyst_slab", static fn(BID $id) => new Slab($id, "Amethyst Slab", $amethystInfo()));
		self::register("amethyst_stairs", static fn(BID $id) => new Stair($id, "Amethyst Stair", $amethystInfo()));

		self::register("budding_amethyst_slab", static fn(BID $id) => new Slab($id, "Budding Amethyst Slab", $amethystInfo()));
		self::register("budding_amethyst_stairs", static fn(BID $id) => new Stair($id, "Budding Amethyst Stair", $amethystInfo()));

		self::register("calcite_slab", static fn(BID $id) => new Slab($id, "Calcite Slab", $calciteInfo()));
		self::register("calcite_stairs", static fn(BID $id) => new Stair($id, "Calcite Stair", $calciteInfo()));
		self::register("calcite_wall", static fn(BID $id) => new Wall($id, "Calcite Wall", $calciteInfo()));

		self::register("obsidian_slab", static fn(BID $id) => new Slab($id, "Obsidian Slab", $obsidianInfo()));
		self::register("obsidian_stairs", static fn(BID $id) => new Stair($id, "Obsidian Stair", $obsidianInfo()));
		self::register("obsidian_fence", static fn(BID $id) => new Fence($id, "Obsidian Fence", $obsidianInfo()));
		self::register("obsidian_fence_gate", static fn(BID $id) => new FenceGate($id, "Obsidian Fence Gate", $obsidianInfo(), WoodType::OAK));

		self::register("end_stone_slab", static fn(BID $id) => new Slab($id, "End Stone Slab", $endStoneInfo()));
		self::register("end_stone_stairs", static fn(BID $id) => new Stair($id, "End Stone Stair", $endStoneInfo()));
		self::register("end_stone_wall", static fn(BID $id) => new Wall($id, "End Stone Wall", $endStoneInfo()));
	}
}
