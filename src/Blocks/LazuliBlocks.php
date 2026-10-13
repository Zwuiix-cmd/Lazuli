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

declare(strict_types=1);

namespace Lazuli\Blocks;

use Nexly\Blocks\Vanilla\NexlyFence;
use pocketmine\block\FenceGate;
use pocketmine\block\Slab;
use pocketmine\block\Stair;
use pocketmine\block\Transparent;
use pocketmine\block\Wall;
use pocketmine\utils\Utils;
use function array_keys;
use function count;
use function implode;
use function mb_strtoupper;

/**
 * Allows getting a new instance of any block implemented by Lazuli
 *
 * This class is generated automatically from source class {@link LazuliBlocksInputs}. Do not modify it manually.
 * It must be regenerated whenever the source class is changed.
 * @see build/codegen/registry-interface.php
 */
final class LazuliBlocks
{
	private static Slab $_mAMETHYST_SLAB;
	private static Stair $_mAMETHYST_STAIRS;
	private static ConcreteFence $_mBLACK_CONCRETE_FENCE;
	private static ConcreteFenceGate $_mBLACK_CONCRETE_FENCE_GATE;
	private static ConcretePowderSlab $_mBLACK_CONCRETE_POWDER_SLAB;
	private static ConcretePowderStair $_mBLACK_CONCRETE_POWDER_STAIRS;
	private static ConcreteWall $_mBLACK_CONCRETE_WALL;
	private static WoolFence $_mBLACK_WOOL_FENCE;
	private static WoolFenceGate $_mBLACK_WOOL_FENCE_GATE;
	private static WoolWall $_mBLACK_WOOL_WALL;
	private static ConcreteFence $_mBLUE_CONCRETE_FENCE;
	private static ConcreteFenceGate $_mBLUE_CONCRETE_FENCE_GATE;
	private static ConcretePowderSlab $_mBLUE_CONCRETE_POWDER_SLAB;
	private static ConcretePowderStair $_mBLUE_CONCRETE_POWDER_STAIRS;
	private static ConcreteWall $_mBLUE_CONCRETE_WALL;
	private static Slab $_mBLUE_ICE_SLAB;
	private static Stair $_mBLUE_ICE_STAIRS;
	private static WoolFence $_mBLUE_WOOL_FENCE;
	private static WoolFenceGate $_mBLUE_WOOL_FENCE_GATE;
	private static WoolWall $_mBLUE_WOOL_WALL;
	private static ConcreteFence $_mBROWN_CONCRETE_FENCE;
	private static ConcreteFenceGate $_mBROWN_CONCRETE_FENCE_GATE;
	private static ConcretePowderSlab $_mBROWN_CONCRETE_POWDER_SLAB;
	private static ConcretePowderStair $_mBROWN_CONCRETE_POWDER_STAIRS;
	private static ConcreteWall $_mBROWN_CONCRETE_WALL;
	private static WoolFence $_mBROWN_WOOL_FENCE;
	private static WoolFenceGate $_mBROWN_WOOL_FENCE_GATE;
	private static WoolWall $_mBROWN_WOOL_WALL;
	private static Slab $_mBUDDING_AMETHYST_SLAB;
	private static Stair $_mBUDDING_AMETHYST_STAIRS;
	private static Slab $_mCALCITE_SLAB;
	private static Stair $_mCALCITE_STAIRS;
	private static Wall $_mCALCITE_WALL;
	private static ClaySlab $_mCLAY_SLAB;
	private static ClayStair $_mCLAY_STAIRS;
	private static Slab $_mCOARSE_DIRT_SLAB;
	private static Stair $_mCOARSE_DIRT_STAIRS;
	private static NyliumSlab $_mCRIMSON_NYLIUM_SLAB;
	private static NyliumStair $_mCRIMSON_NYLIUM_STAIRS;
	private static ConcreteFence $_mCYAN_CONCRETE_FENCE;
	private static ConcreteFenceGate $_mCYAN_CONCRETE_FENCE_GATE;
	private static ConcretePowderSlab $_mCYAN_CONCRETE_POWDER_SLAB;
	private static ConcretePowderStair $_mCYAN_CONCRETE_POWDER_STAIRS;
	private static ConcreteWall $_mCYAN_CONCRETE_WALL;
	private static WoolFence $_mCYAN_WOOL_FENCE;
	private static WoolFenceGate $_mCYAN_WOOL_FENCE_GATE;
	private static WoolWall $_mCYAN_WOOL_WALL;
	private static DirtPathSlab $_mDIRT_PATH_SLAB;
	private static DirtPathStair $_mDIRT_PATH_STAIRS;
	private static DirtSlab $_mDIRT_SLAB;
	private static DirtStair $_mDIRT_STAIRS;
	private static Slab $_mDIRT_WITH_ROOTS_SLAB;
	private static Stair $_mDIRT_WITH_ROOTS_STAIRS;
	private static Slab $_mDRIPSTONE_SLAB;
	private static Stair $_mDRIPSTONE_STAIRS;
	private static Wall $_mDRIPSTONE_WALL;
	private static Slab $_mEND_STONE_SLAB;
	private static Stair $_mEND_STONE_STAIRS;
	private static Wall $_mEND_STONE_WALL;
	private static GrassSlab $_mGRASS_SLAB;
	private static GrassStair $_mGRASS_STAIRS;
	private static GravelSlab $_mGRAVEL_SLAB;
	private static GravelStair $_mGRAVEL_STAIRS;
	private static ConcreteFence $_mGRAY_CONCRETE_FENCE;
	private static ConcreteFenceGate $_mGRAY_CONCRETE_FENCE_GATE;
	private static ConcretePowderSlab $_mGRAY_CONCRETE_POWDER_SLAB;
	private static ConcretePowderStair $_mGRAY_CONCRETE_POWDER_STAIRS;
	private static ConcreteWall $_mGRAY_CONCRETE_WALL;
	private static WoolFence $_mGRAY_WOOL_FENCE;
	private static WoolFenceGate $_mGRAY_WOOL_FENCE_GATE;
	private static WoolWall $_mGRAY_WOOL_WALL;
	private static ConcreteFence $_mGREEN_CONCRETE_FENCE;
	private static ConcreteFenceGate $_mGREEN_CONCRETE_FENCE_GATE;
	private static ConcretePowderSlab $_mGREEN_CONCRETE_POWDER_SLAB;
	private static ConcretePowderStair $_mGREEN_CONCRETE_POWDER_STAIRS;
	private static ConcreteWall $_mGREEN_CONCRETE_WALL;
	private static WoolFence $_mGREEN_WOOL_FENCE;
	private static WoolFenceGate $_mGREEN_WOOL_FENCE_GATE;
	private static WoolWall $_mGREEN_WOOL_WALL;
	private static ConcreteFence $_mLIGHT_BLUE_CONCRETE_FENCE;
	private static ConcreteFenceGate $_mLIGHT_BLUE_CONCRETE_FENCE_GATE;
	private static ConcretePowderSlab $_mLIGHT_BLUE_CONCRETE_POWDER_SLAB;
	private static ConcretePowderStair $_mLIGHT_BLUE_CONCRETE_POWDER_STAIRS;
	private static ConcreteWall $_mLIGHT_BLUE_CONCRETE_WALL;
	private static WoolFence $_mLIGHT_BLUE_WOOL_FENCE;
	private static WoolFenceGate $_mLIGHT_BLUE_WOOL_FENCE_GATE;
	private static WoolWall $_mLIGHT_BLUE_WOOL_WALL;
	private static ConcreteFence $_mLIGHT_GRAY_CONCRETE_FENCE;
	private static ConcreteFenceGate $_mLIGHT_GRAY_CONCRETE_FENCE_GATE;
	private static ConcretePowderSlab $_mLIGHT_GRAY_CONCRETE_POWDER_SLAB;
	private static ConcretePowderStair $_mLIGHT_GRAY_CONCRETE_POWDER_STAIRS;
	private static ConcreteWall $_mLIGHT_GRAY_CONCRETE_WALL;
	private static WoolFence $_mLIGHT_GRAY_WOOL_FENCE;
	private static WoolFenceGate $_mLIGHT_GRAY_WOOL_FENCE_GATE;
	private static WoolWall $_mLIGHT_GRAY_WOOL_WALL;
	private static ConcreteFence $_mLIME_CONCRETE_FENCE;
	private static ConcreteFenceGate $_mLIME_CONCRETE_FENCE_GATE;
	private static ConcretePowderSlab $_mLIME_CONCRETE_POWDER_SLAB;
	private static ConcretePowderStair $_mLIME_CONCRETE_POWDER_STAIRS;
	private static ConcreteWall $_mLIME_CONCRETE_WALL;
	private static WoolFence $_mLIME_WOOL_FENCE;
	private static WoolFenceGate $_mLIME_WOOL_FENCE_GATE;
	private static WoolWall $_mLIME_WOOL_WALL;
	private static ConcreteFence $_mMAGENTA_CONCRETE_FENCE;
	private static ConcreteFenceGate $_mMAGENTA_CONCRETE_FENCE_GATE;
	private static ConcretePowderSlab $_mMAGENTA_CONCRETE_POWDER_SLAB;
	private static ConcretePowderStair $_mMAGENTA_CONCRETE_POWDER_STAIRS;
	private static ConcreteWall $_mMAGENTA_CONCRETE_WALL;
	private static WoolFence $_mMAGENTA_WOOL_FENCE;
	private static WoolFenceGate $_mMAGENTA_WOOL_FENCE_GATE;
	private static WoolWall $_mMAGENTA_WOOL_WALL;
	private static Slab $_mMOSS_SLAB;
	private static Stair $_mMOSS_STAIRS;
	private static Slab $_mMUD_SLAB;
	private static Stair $_mMUD_STAIRS;
	private static MyceliumSlab $_mMYCELIUM_SLAB;
	private static MyceliumStair $_mMYCELIUM_STAIRS;
	private static NetherrackSlab $_mNETHERRACK_SLAB;
	private static NetherrackStair $_mNETHERRACK_STAIRS;
	private static NetherrackWall $_mNETHERRACK_WALL;
	private static NexlyFence $_mNETHER_WART_FENCE;
	private static FenceGate $_mNETHER_WART_FENCE_GATE;
	private static Slab $_mNETHER_WART_SLAB;
	private static Stair $_mNETHER_WART_STAIRS;
	private static NexlyFence $_mOBSIDIAN_FENCE;
	private static FenceGate $_mOBSIDIAN_FENCE_GATE;
	private static Slab $_mOBSIDIAN_SLAB;
	private static Stair $_mOBSIDIAN_STAIRS;
	private static ConcreteFence $_mORANGE_CONCRETE_FENCE;
	private static ConcreteFenceGate $_mORANGE_CONCRETE_FENCE_GATE;
	private static ConcretePowderSlab $_mORANGE_CONCRETE_POWDER_SLAB;
	private static ConcretePowderStair $_mORANGE_CONCRETE_POWDER_STAIRS;
	private static ConcreteWall $_mORANGE_CONCRETE_WALL;
	private static WoolFence $_mORANGE_WOOL_FENCE;
	private static WoolFenceGate $_mORANGE_WOOL_FENCE_GATE;
	private static WoolWall $_mORANGE_WOOL_WALL;
	private static Slab $_mPACKED_ICE_SLAB;
	private static Stair $_mPACKED_ICE_STAIRS;
	private static NexlyFence $_mPACKED_MUD_FENCE;
	private static FenceGate $_mPACKED_MUD_FENCE_GATE;
	private static Slab $_mPACKED_MUD_SLAB;
	private static Stair $_mPACKED_MUD_STAIRS;
	private static Slab $_mPALE_MOSS_SLAB;
	private static Stair $_mPALE_MOSS_STAIRS;
	private static ConcreteFence $_mPINK_CONCRETE_FENCE;
	private static ConcreteFenceGate $_mPINK_CONCRETE_FENCE_GATE;
	private static ConcretePowderSlab $_mPINK_CONCRETE_POWDER_SLAB;
	private static ConcretePowderStair $_mPINK_CONCRETE_POWDER_STAIRS;
	private static ConcreteWall $_mPINK_CONCRETE_WALL;
	private static WoolFence $_mPINK_WOOL_FENCE;
	private static WoolFenceGate $_mPINK_WOOL_FENCE_GATE;
	private static WoolWall $_mPINK_WOOL_WALL;
	private static PodzolSlab $_mPODZOL_SLAB;
	private static PodzolStair $_mPODZOL_STAIRS;
	private static ConcreteFence $_mPURPLE_CONCRETE_FENCE;
	private static ConcreteFenceGate $_mPURPLE_CONCRETE_FENCE_GATE;
	private static ConcretePowderSlab $_mPURPLE_CONCRETE_POWDER_SLAB;
	private static ConcretePowderStair $_mPURPLE_CONCRETE_POWDER_STAIRS;
	private static ConcreteWall $_mPURPLE_CONCRETE_WALL;
	private static WoolFence $_mPURPLE_WOOL_FENCE;
	private static WoolFenceGate $_mPURPLE_WOOL_FENCE_GATE;
	private static WoolWall $_mPURPLE_WOOL_WALL;
	private static ConcreteFence $_mRED_CONCRETE_FENCE;
	private static ConcreteFenceGate $_mRED_CONCRETE_FENCE_GATE;
	private static ConcretePowderSlab $_mRED_CONCRETE_POWDER_SLAB;
	private static ConcretePowderStair $_mRED_CONCRETE_POWDER_STAIRS;
	private static ConcreteWall $_mRED_CONCRETE_WALL;
	private static FallableSlab $_mRED_SAND_SLAB;
	private static FallableStair $_mRED_SAND_STAIRS;
	private static WoolFence $_mRED_WOOL_FENCE;
	private static WoolFenceGate $_mRED_WOOL_FENCE_GATE;
	private static WoolWall $_mRED_WOOL_WALL;
	private static FallableSlab $_mSAND_SLAB;
	private static FallableStair $_mSAND_STAIRS;
	private static Slab $_mSNOW_SLAB;
	private static Stair $_mSNOW_STAIRS;
	private static SoulSoilSlab $_mSOUL_SOIL_SLAB;
	private static SoulSoilStair $_mSOUL_SOIL_STAIRS;
	private static GravelSlab $_mSUSPICIOUS_GRAVEL_SLAB;
	private static GravelStair $_mSUSPICIOUS_GRAVEL_STAIRS;
	private static FallableSlab $_mSUSPICIOUS_SAND_SLAB;
	private static FallableStair $_mSUSPICIOUS_SAND_STAIRS;
	private static NyliumSlab $_mWARPED_NYLIUM_SLAB;
	private static NyliumStair $_mWARPED_NYLIUM_STAIRS;
	private static NexlyFence $_mWARPED_WART_FENCE;
	private static FenceGate $_mWARPED_WART_FENCE_GATE;
	private static Slab $_mWARPED_WART_SLAB;
	private static Stair $_mWARPED_WART_STAIRS;
	private static ConcreteFence $_mWHITE_CONCRETE_FENCE;
	private static ConcreteFenceGate $_mWHITE_CONCRETE_FENCE_GATE;
	private static ConcretePowderSlab $_mWHITE_CONCRETE_POWDER_SLAB;
	private static ConcretePowderStair $_mWHITE_CONCRETE_POWDER_STAIRS;
	private static ConcreteWall $_mWHITE_CONCRETE_WALL;
	private static WoolFence $_mWHITE_WOOL_FENCE;
	private static WoolFenceGate $_mWHITE_WOOL_FENCE_GATE;
	private static WoolWall $_mWHITE_WOOL_WALL;
	private static ConcreteFence $_mYELLOW_CONCRETE_FENCE;
	private static ConcreteFenceGate $_mYELLOW_CONCRETE_FENCE_GATE;
	private static ConcretePowderSlab $_mYELLOW_CONCRETE_POWDER_SLAB;
	private static ConcretePowderStair $_mYELLOW_CONCRETE_POWDER_STAIRS;
	private static ConcreteWall $_mYELLOW_CONCRETE_WALL;
	private static WoolFence $_mYELLOW_WOOL_FENCE;
	private static WoolFenceGate $_mYELLOW_WOOL_FENCE_GATE;
	private static WoolWall $_mYELLOW_WOOL_WALL;

	/**
	 * @var Transparent[]
	 * @phpstan-var array<string, Transparent>
	 */
	private static array $members;

	private static bool $initialized = false;

	private function __construct()
	{
		//NOOP
	}

	/**
	 * Hack to allow ignoring PHPStan wrong type assignment error in one place instead of hundreds or thousands
	 * Assumes that the input value already matches the expected type. If not, a TypeError will be thrown on assignment.
	 *
	 * @phpstan-param \Closure(never) : Transparent $closure
	 */
	private static function unsafeAssign(\Closure $closure, Transparent $memberValue) : void
	{
		/**
		 * This type is not correct either (the param is actually a subtype of Transparent) but it's called
		 * unsafeAssign for a reason :)
		 * @phpstan-var \Closure(Transparent) : Transparent $closure
		 */
		$closure($memberValue);
	}

	/**
	 * @return \Closure[]
	 * @phpstan-return array<string, \Closure(never) : Transparent>
	 */
	private static function getInitAssigners() : array
	{
		return [
			"amethyst_slab" => fn(Slab $v) => self::$_mAMETHYST_SLAB = $v,
			"amethyst_stairs" => fn(Stair $v) => self::$_mAMETHYST_STAIRS = $v,
			"black_concrete_fence" => fn(ConcreteFence $v) => self::$_mBLACK_CONCRETE_FENCE = $v,
			"black_concrete_fence_gate" => fn(ConcreteFenceGate $v) => self::$_mBLACK_CONCRETE_FENCE_GATE = $v,
			"black_concrete_powder_slab" => fn(ConcretePowderSlab $v) => self::$_mBLACK_CONCRETE_POWDER_SLAB = $v,
			"black_concrete_powder_stairs" => fn(ConcretePowderStair $v) => self::$_mBLACK_CONCRETE_POWDER_STAIRS = $v,
			"black_concrete_wall" => fn(ConcreteWall $v) => self::$_mBLACK_CONCRETE_WALL = $v,
			"black_wool_fence" => fn(WoolFence $v) => self::$_mBLACK_WOOL_FENCE = $v,
			"black_wool_fence_gate" => fn(WoolFenceGate $v) => self::$_mBLACK_WOOL_FENCE_GATE = $v,
			"black_wool_wall" => fn(WoolWall $v) => self::$_mBLACK_WOOL_WALL = $v,
			"blue_concrete_fence" => fn(ConcreteFence $v) => self::$_mBLUE_CONCRETE_FENCE = $v,
			"blue_concrete_fence_gate" => fn(ConcreteFenceGate $v) => self::$_mBLUE_CONCRETE_FENCE_GATE = $v,
			"blue_concrete_powder_slab" => fn(ConcretePowderSlab $v) => self::$_mBLUE_CONCRETE_POWDER_SLAB = $v,
			"blue_concrete_powder_stairs" => fn(ConcretePowderStair $v) => self::$_mBLUE_CONCRETE_POWDER_STAIRS = $v,
			"blue_concrete_wall" => fn(ConcreteWall $v) => self::$_mBLUE_CONCRETE_WALL = $v,
			"blue_ice_slab" => fn(Slab $v) => self::$_mBLUE_ICE_SLAB = $v,
			"blue_ice_stairs" => fn(Stair $v) => self::$_mBLUE_ICE_STAIRS = $v,
			"blue_wool_fence" => fn(WoolFence $v) => self::$_mBLUE_WOOL_FENCE = $v,
			"blue_wool_fence_gate" => fn(WoolFenceGate $v) => self::$_mBLUE_WOOL_FENCE_GATE = $v,
			"blue_wool_wall" => fn(WoolWall $v) => self::$_mBLUE_WOOL_WALL = $v,
			"brown_concrete_fence" => fn(ConcreteFence $v) => self::$_mBROWN_CONCRETE_FENCE = $v,
			"brown_concrete_fence_gate" => fn(ConcreteFenceGate $v) => self::$_mBROWN_CONCRETE_FENCE_GATE = $v,
			"brown_concrete_powder_slab" => fn(ConcretePowderSlab $v) => self::$_mBROWN_CONCRETE_POWDER_SLAB = $v,
			"brown_concrete_powder_stairs" => fn(ConcretePowderStair $v) => self::$_mBROWN_CONCRETE_POWDER_STAIRS = $v,
			"brown_concrete_wall" => fn(ConcreteWall $v) => self::$_mBROWN_CONCRETE_WALL = $v,
			"brown_wool_fence" => fn(WoolFence $v) => self::$_mBROWN_WOOL_FENCE = $v,
			"brown_wool_fence_gate" => fn(WoolFenceGate $v) => self::$_mBROWN_WOOL_FENCE_GATE = $v,
			"brown_wool_wall" => fn(WoolWall $v) => self::$_mBROWN_WOOL_WALL = $v,
			"budding_amethyst_slab" => fn(Slab $v) => self::$_mBUDDING_AMETHYST_SLAB = $v,
			"budding_amethyst_stairs" => fn(Stair $v) => self::$_mBUDDING_AMETHYST_STAIRS = $v,
			"calcite_slab" => fn(Slab $v) => self::$_mCALCITE_SLAB = $v,
			"calcite_stairs" => fn(Stair $v) => self::$_mCALCITE_STAIRS = $v,
			"calcite_wall" => fn(Wall $v) => self::$_mCALCITE_WALL = $v,
			"clay_slab" => fn(ClaySlab $v) => self::$_mCLAY_SLAB = $v,
			"clay_stairs" => fn(ClayStair $v) => self::$_mCLAY_STAIRS = $v,
			"coarse_dirt_slab" => fn(Slab $v) => self::$_mCOARSE_DIRT_SLAB = $v,
			"coarse_dirt_stairs" => fn(Stair $v) => self::$_mCOARSE_DIRT_STAIRS = $v,
			"crimson_nylium_slab" => fn(NyliumSlab $v) => self::$_mCRIMSON_NYLIUM_SLAB = $v,
			"crimson_nylium_stairs" => fn(NyliumStair $v) => self::$_mCRIMSON_NYLIUM_STAIRS = $v,
			"cyan_concrete_fence" => fn(ConcreteFence $v) => self::$_mCYAN_CONCRETE_FENCE = $v,
			"cyan_concrete_fence_gate" => fn(ConcreteFenceGate $v) => self::$_mCYAN_CONCRETE_FENCE_GATE = $v,
			"cyan_concrete_powder_slab" => fn(ConcretePowderSlab $v) => self::$_mCYAN_CONCRETE_POWDER_SLAB = $v,
			"cyan_concrete_powder_stairs" => fn(ConcretePowderStair $v) => self::$_mCYAN_CONCRETE_POWDER_STAIRS = $v,
			"cyan_concrete_wall" => fn(ConcreteWall $v) => self::$_mCYAN_CONCRETE_WALL = $v,
			"cyan_wool_fence" => fn(WoolFence $v) => self::$_mCYAN_WOOL_FENCE = $v,
			"cyan_wool_fence_gate" => fn(WoolFenceGate $v) => self::$_mCYAN_WOOL_FENCE_GATE = $v,
			"cyan_wool_wall" => fn(WoolWall $v) => self::$_mCYAN_WOOL_WALL = $v,
			"dirt_path_slab" => fn(DirtPathSlab $v) => self::$_mDIRT_PATH_SLAB = $v,
			"dirt_path_stairs" => fn(DirtPathStair $v) => self::$_mDIRT_PATH_STAIRS = $v,
			"dirt_slab" => fn(DirtSlab $v) => self::$_mDIRT_SLAB = $v,
			"dirt_stairs" => fn(DirtStair $v) => self::$_mDIRT_STAIRS = $v,
			"dirt_with_roots_slab" => fn(Slab $v) => self::$_mDIRT_WITH_ROOTS_SLAB = $v,
			"dirt_with_roots_stairs" => fn(Stair $v) => self::$_mDIRT_WITH_ROOTS_STAIRS = $v,
			"dripstone_slab" => fn(Slab $v) => self::$_mDRIPSTONE_SLAB = $v,
			"dripstone_stairs" => fn(Stair $v) => self::$_mDRIPSTONE_STAIRS = $v,
			"dripstone_wall" => fn(Wall $v) => self::$_mDRIPSTONE_WALL = $v,
			"end_stone_slab" => fn(Slab $v) => self::$_mEND_STONE_SLAB = $v,
			"end_stone_stairs" => fn(Stair $v) => self::$_mEND_STONE_STAIRS = $v,
			"end_stone_wall" => fn(Wall $v) => self::$_mEND_STONE_WALL = $v,
			"grass_slab" => fn(GrassSlab $v) => self::$_mGRASS_SLAB = $v,
			"grass_stairs" => fn(GrassStair $v) => self::$_mGRASS_STAIRS = $v,
			"gravel_slab" => fn(GravelSlab $v) => self::$_mGRAVEL_SLAB = $v,
			"gravel_stairs" => fn(GravelStair $v) => self::$_mGRAVEL_STAIRS = $v,
			"gray_concrete_fence" => fn(ConcreteFence $v) => self::$_mGRAY_CONCRETE_FENCE = $v,
			"gray_concrete_fence_gate" => fn(ConcreteFenceGate $v) => self::$_mGRAY_CONCRETE_FENCE_GATE = $v,
			"gray_concrete_powder_slab" => fn(ConcretePowderSlab $v) => self::$_mGRAY_CONCRETE_POWDER_SLAB = $v,
			"gray_concrete_powder_stairs" => fn(ConcretePowderStair $v) => self::$_mGRAY_CONCRETE_POWDER_STAIRS = $v,
			"gray_concrete_wall" => fn(ConcreteWall $v) => self::$_mGRAY_CONCRETE_WALL = $v,
			"gray_wool_fence" => fn(WoolFence $v) => self::$_mGRAY_WOOL_FENCE = $v,
			"gray_wool_fence_gate" => fn(WoolFenceGate $v) => self::$_mGRAY_WOOL_FENCE_GATE = $v,
			"gray_wool_wall" => fn(WoolWall $v) => self::$_mGRAY_WOOL_WALL = $v,
			"green_concrete_fence" => fn(ConcreteFence $v) => self::$_mGREEN_CONCRETE_FENCE = $v,
			"green_concrete_fence_gate" => fn(ConcreteFenceGate $v) => self::$_mGREEN_CONCRETE_FENCE_GATE = $v,
			"green_concrete_powder_slab" => fn(ConcretePowderSlab $v) => self::$_mGREEN_CONCRETE_POWDER_SLAB = $v,
			"green_concrete_powder_stairs" => fn(ConcretePowderStair $v) => self::$_mGREEN_CONCRETE_POWDER_STAIRS = $v,
			"green_concrete_wall" => fn(ConcreteWall $v) => self::$_mGREEN_CONCRETE_WALL = $v,
			"green_wool_fence" => fn(WoolFence $v) => self::$_mGREEN_WOOL_FENCE = $v,
			"green_wool_fence_gate" => fn(WoolFenceGate $v) => self::$_mGREEN_WOOL_FENCE_GATE = $v,
			"green_wool_wall" => fn(WoolWall $v) => self::$_mGREEN_WOOL_WALL = $v,
			"light_blue_concrete_fence" => fn(ConcreteFence $v) => self::$_mLIGHT_BLUE_CONCRETE_FENCE = $v,
			"light_blue_concrete_fence_gate" => fn(ConcreteFenceGate $v) => self::$_mLIGHT_BLUE_CONCRETE_FENCE_GATE = $v,
			"light_blue_concrete_powder_slab" => fn(ConcretePowderSlab $v) => self::$_mLIGHT_BLUE_CONCRETE_POWDER_SLAB = $v,
			"light_blue_concrete_powder_stairs" => fn(ConcretePowderStair $v) => self::$_mLIGHT_BLUE_CONCRETE_POWDER_STAIRS = $v,
			"light_blue_concrete_wall" => fn(ConcreteWall $v) => self::$_mLIGHT_BLUE_CONCRETE_WALL = $v,
			"light_blue_wool_fence" => fn(WoolFence $v) => self::$_mLIGHT_BLUE_WOOL_FENCE = $v,
			"light_blue_wool_fence_gate" => fn(WoolFenceGate $v) => self::$_mLIGHT_BLUE_WOOL_FENCE_GATE = $v,
			"light_blue_wool_wall" => fn(WoolWall $v) => self::$_mLIGHT_BLUE_WOOL_WALL = $v,
			"light_gray_concrete_fence" => fn(ConcreteFence $v) => self::$_mLIGHT_GRAY_CONCRETE_FENCE = $v,
			"light_gray_concrete_fence_gate" => fn(ConcreteFenceGate $v) => self::$_mLIGHT_GRAY_CONCRETE_FENCE_GATE = $v,
			"light_gray_concrete_powder_slab" => fn(ConcretePowderSlab $v) => self::$_mLIGHT_GRAY_CONCRETE_POWDER_SLAB = $v,
			"light_gray_concrete_powder_stairs" => fn(ConcretePowderStair $v) => self::$_mLIGHT_GRAY_CONCRETE_POWDER_STAIRS = $v,
			"light_gray_concrete_wall" => fn(ConcreteWall $v) => self::$_mLIGHT_GRAY_CONCRETE_WALL = $v,
			"light_gray_wool_fence" => fn(WoolFence $v) => self::$_mLIGHT_GRAY_WOOL_FENCE = $v,
			"light_gray_wool_fence_gate" => fn(WoolFenceGate $v) => self::$_mLIGHT_GRAY_WOOL_FENCE_GATE = $v,
			"light_gray_wool_wall" => fn(WoolWall $v) => self::$_mLIGHT_GRAY_WOOL_WALL = $v,
			"lime_concrete_fence" => fn(ConcreteFence $v) => self::$_mLIME_CONCRETE_FENCE = $v,
			"lime_concrete_fence_gate" => fn(ConcreteFenceGate $v) => self::$_mLIME_CONCRETE_FENCE_GATE = $v,
			"lime_concrete_powder_slab" => fn(ConcretePowderSlab $v) => self::$_mLIME_CONCRETE_POWDER_SLAB = $v,
			"lime_concrete_powder_stairs" => fn(ConcretePowderStair $v) => self::$_mLIME_CONCRETE_POWDER_STAIRS = $v,
			"lime_concrete_wall" => fn(ConcreteWall $v) => self::$_mLIME_CONCRETE_WALL = $v,
			"lime_wool_fence" => fn(WoolFence $v) => self::$_mLIME_WOOL_FENCE = $v,
			"lime_wool_fence_gate" => fn(WoolFenceGate $v) => self::$_mLIME_WOOL_FENCE_GATE = $v,
			"lime_wool_wall" => fn(WoolWall $v) => self::$_mLIME_WOOL_WALL = $v,
			"magenta_concrete_fence" => fn(ConcreteFence $v) => self::$_mMAGENTA_CONCRETE_FENCE = $v,
			"magenta_concrete_fence_gate" => fn(ConcreteFenceGate $v) => self::$_mMAGENTA_CONCRETE_FENCE_GATE = $v,
			"magenta_concrete_powder_slab" => fn(ConcretePowderSlab $v) => self::$_mMAGENTA_CONCRETE_POWDER_SLAB = $v,
			"magenta_concrete_powder_stairs" => fn(ConcretePowderStair $v) => self::$_mMAGENTA_CONCRETE_POWDER_STAIRS = $v,
			"magenta_concrete_wall" => fn(ConcreteWall $v) => self::$_mMAGENTA_CONCRETE_WALL = $v,
			"magenta_wool_fence" => fn(WoolFence $v) => self::$_mMAGENTA_WOOL_FENCE = $v,
			"magenta_wool_fence_gate" => fn(WoolFenceGate $v) => self::$_mMAGENTA_WOOL_FENCE_GATE = $v,
			"magenta_wool_wall" => fn(WoolWall $v) => self::$_mMAGENTA_WOOL_WALL = $v,
			"moss_slab" => fn(Slab $v) => self::$_mMOSS_SLAB = $v,
			"moss_stairs" => fn(Stair $v) => self::$_mMOSS_STAIRS = $v,
			"mud_slab" => fn(Slab $v) => self::$_mMUD_SLAB = $v,
			"mud_stairs" => fn(Stair $v) => self::$_mMUD_STAIRS = $v,
			"mycelium_slab" => fn(MyceliumSlab $v) => self::$_mMYCELIUM_SLAB = $v,
			"mycelium_stairs" => fn(MyceliumStair $v) => self::$_mMYCELIUM_STAIRS = $v,
			"netherrack_slab" => fn(NetherrackSlab $v) => self::$_mNETHERRACK_SLAB = $v,
			"netherrack_stairs" => fn(NetherrackStair $v) => self::$_mNETHERRACK_STAIRS = $v,
			"netherrack_wall" => fn(NetherrackWall $v) => self::$_mNETHERRACK_WALL = $v,
			"nether_wart_fence" => fn(NexlyFence $v) => self::$_mNETHER_WART_FENCE = $v,
			"nether_wart_fence_gate" => fn(FenceGate $v) => self::$_mNETHER_WART_FENCE_GATE = $v,
			"nether_wart_slab" => fn(Slab $v) => self::$_mNETHER_WART_SLAB = $v,
			"nether_wart_stairs" => fn(Stair $v) => self::$_mNETHER_WART_STAIRS = $v,
			"obsidian_fence" => fn(NexlyFence $v) => self::$_mOBSIDIAN_FENCE = $v,
			"obsidian_fence_gate" => fn(FenceGate $v) => self::$_mOBSIDIAN_FENCE_GATE = $v,
			"obsidian_slab" => fn(Slab $v) => self::$_mOBSIDIAN_SLAB = $v,
			"obsidian_stairs" => fn(Stair $v) => self::$_mOBSIDIAN_STAIRS = $v,
			"orange_concrete_fence" => fn(ConcreteFence $v) => self::$_mORANGE_CONCRETE_FENCE = $v,
			"orange_concrete_fence_gate" => fn(ConcreteFenceGate $v) => self::$_mORANGE_CONCRETE_FENCE_GATE = $v,
			"orange_concrete_powder_slab" => fn(ConcretePowderSlab $v) => self::$_mORANGE_CONCRETE_POWDER_SLAB = $v,
			"orange_concrete_powder_stairs" => fn(ConcretePowderStair $v) => self::$_mORANGE_CONCRETE_POWDER_STAIRS = $v,
			"orange_concrete_wall" => fn(ConcreteWall $v) => self::$_mORANGE_CONCRETE_WALL = $v,
			"orange_wool_fence" => fn(WoolFence $v) => self::$_mORANGE_WOOL_FENCE = $v,
			"orange_wool_fence_gate" => fn(WoolFenceGate $v) => self::$_mORANGE_WOOL_FENCE_GATE = $v,
			"orange_wool_wall" => fn(WoolWall $v) => self::$_mORANGE_WOOL_WALL = $v,
			"packed_ice_slab" => fn(Slab $v) => self::$_mPACKED_ICE_SLAB = $v,
			"packed_ice_stairs" => fn(Stair $v) => self::$_mPACKED_ICE_STAIRS = $v,
			"packed_mud_fence" => fn(NexlyFence $v) => self::$_mPACKED_MUD_FENCE = $v,
			"packed_mud_fence_gate" => fn(FenceGate $v) => self::$_mPACKED_MUD_FENCE_GATE = $v,
			"packed_mud_slab" => fn(Slab $v) => self::$_mPACKED_MUD_SLAB = $v,
			"packed_mud_stairs" => fn(Stair $v) => self::$_mPACKED_MUD_STAIRS = $v,
			"pale_moss_slab" => fn(Slab $v) => self::$_mPALE_MOSS_SLAB = $v,
			"pale_moss_stairs" => fn(Stair $v) => self::$_mPALE_MOSS_STAIRS = $v,
			"pink_concrete_fence" => fn(ConcreteFence $v) => self::$_mPINK_CONCRETE_FENCE = $v,
			"pink_concrete_fence_gate" => fn(ConcreteFenceGate $v) => self::$_mPINK_CONCRETE_FENCE_GATE = $v,
			"pink_concrete_powder_slab" => fn(ConcretePowderSlab $v) => self::$_mPINK_CONCRETE_POWDER_SLAB = $v,
			"pink_concrete_powder_stairs" => fn(ConcretePowderStair $v) => self::$_mPINK_CONCRETE_POWDER_STAIRS = $v,
			"pink_concrete_wall" => fn(ConcreteWall $v) => self::$_mPINK_CONCRETE_WALL = $v,
			"pink_wool_fence" => fn(WoolFence $v) => self::$_mPINK_WOOL_FENCE = $v,
			"pink_wool_fence_gate" => fn(WoolFenceGate $v) => self::$_mPINK_WOOL_FENCE_GATE = $v,
			"pink_wool_wall" => fn(WoolWall $v) => self::$_mPINK_WOOL_WALL = $v,
			"podzol_slab" => fn(PodzolSlab $v) => self::$_mPODZOL_SLAB = $v,
			"podzol_stairs" => fn(PodzolStair $v) => self::$_mPODZOL_STAIRS = $v,
			"purple_concrete_fence" => fn(ConcreteFence $v) => self::$_mPURPLE_CONCRETE_FENCE = $v,
			"purple_concrete_fence_gate" => fn(ConcreteFenceGate $v) => self::$_mPURPLE_CONCRETE_FENCE_GATE = $v,
			"purple_concrete_powder_slab" => fn(ConcretePowderSlab $v) => self::$_mPURPLE_CONCRETE_POWDER_SLAB = $v,
			"purple_concrete_powder_stairs" => fn(ConcretePowderStair $v) => self::$_mPURPLE_CONCRETE_POWDER_STAIRS = $v,
			"purple_concrete_wall" => fn(ConcreteWall $v) => self::$_mPURPLE_CONCRETE_WALL = $v,
			"purple_wool_fence" => fn(WoolFence $v) => self::$_mPURPLE_WOOL_FENCE = $v,
			"purple_wool_fence_gate" => fn(WoolFenceGate $v) => self::$_mPURPLE_WOOL_FENCE_GATE = $v,
			"purple_wool_wall" => fn(WoolWall $v) => self::$_mPURPLE_WOOL_WALL = $v,
			"red_concrete_fence" => fn(ConcreteFence $v) => self::$_mRED_CONCRETE_FENCE = $v,
			"red_concrete_fence_gate" => fn(ConcreteFenceGate $v) => self::$_mRED_CONCRETE_FENCE_GATE = $v,
			"red_concrete_powder_slab" => fn(ConcretePowderSlab $v) => self::$_mRED_CONCRETE_POWDER_SLAB = $v,
			"red_concrete_powder_stairs" => fn(ConcretePowderStair $v) => self::$_mRED_CONCRETE_POWDER_STAIRS = $v,
			"red_concrete_wall" => fn(ConcreteWall $v) => self::$_mRED_CONCRETE_WALL = $v,
			"red_sand_slab" => fn(FallableSlab $v) => self::$_mRED_SAND_SLAB = $v,
			"red_sand_stairs" => fn(FallableStair $v) => self::$_mRED_SAND_STAIRS = $v,
			"red_wool_fence" => fn(WoolFence $v) => self::$_mRED_WOOL_FENCE = $v,
			"red_wool_fence_gate" => fn(WoolFenceGate $v) => self::$_mRED_WOOL_FENCE_GATE = $v,
			"red_wool_wall" => fn(WoolWall $v) => self::$_mRED_WOOL_WALL = $v,
			"sand_slab" => fn(FallableSlab $v) => self::$_mSAND_SLAB = $v,
			"sand_stairs" => fn(FallableStair $v) => self::$_mSAND_STAIRS = $v,
			"snow_slab" => fn(Slab $v) => self::$_mSNOW_SLAB = $v,
			"snow_stairs" => fn(Stair $v) => self::$_mSNOW_STAIRS = $v,
			"soul_soil_slab" => fn(SoulSoilSlab $v) => self::$_mSOUL_SOIL_SLAB = $v,
			"soul_soil_stairs" => fn(SoulSoilStair $v) => self::$_mSOUL_SOIL_STAIRS = $v,
			"suspicious_gravel_slab" => fn(GravelSlab $v) => self::$_mSUSPICIOUS_GRAVEL_SLAB = $v,
			"suspicious_gravel_stairs" => fn(GravelStair $v) => self::$_mSUSPICIOUS_GRAVEL_STAIRS = $v,
			"suspicious_sand_slab" => fn(FallableSlab $v) => self::$_mSUSPICIOUS_SAND_SLAB = $v,
			"suspicious_sand_stairs" => fn(FallableStair $v) => self::$_mSUSPICIOUS_SAND_STAIRS = $v,
			"warped_nylium_slab" => fn(NyliumSlab $v) => self::$_mWARPED_NYLIUM_SLAB = $v,
			"warped_nylium_stairs" => fn(NyliumStair $v) => self::$_mWARPED_NYLIUM_STAIRS = $v,
			"warped_wart_fence" => fn(NexlyFence $v) => self::$_mWARPED_WART_FENCE = $v,
			"warped_wart_fence_gate" => fn(FenceGate $v) => self::$_mWARPED_WART_FENCE_GATE = $v,
			"warped_wart_slab" => fn(Slab $v) => self::$_mWARPED_WART_SLAB = $v,
			"warped_wart_stairs" => fn(Stair $v) => self::$_mWARPED_WART_STAIRS = $v,
			"white_concrete_fence" => fn(ConcreteFence $v) => self::$_mWHITE_CONCRETE_FENCE = $v,
			"white_concrete_fence_gate" => fn(ConcreteFenceGate $v) => self::$_mWHITE_CONCRETE_FENCE_GATE = $v,
			"white_concrete_powder_slab" => fn(ConcretePowderSlab $v) => self::$_mWHITE_CONCRETE_POWDER_SLAB = $v,
			"white_concrete_powder_stairs" => fn(ConcretePowderStair $v) => self::$_mWHITE_CONCRETE_POWDER_STAIRS = $v,
			"white_concrete_wall" => fn(ConcreteWall $v) => self::$_mWHITE_CONCRETE_WALL = $v,
			"white_wool_fence" => fn(WoolFence $v) => self::$_mWHITE_WOOL_FENCE = $v,
			"white_wool_fence_gate" => fn(WoolFenceGate $v) => self::$_mWHITE_WOOL_FENCE_GATE = $v,
			"white_wool_wall" => fn(WoolWall $v) => self::$_mWHITE_WOOL_WALL = $v,
			"yellow_concrete_fence" => fn(ConcreteFence $v) => self::$_mYELLOW_CONCRETE_FENCE = $v,
			"yellow_concrete_fence_gate" => fn(ConcreteFenceGate $v) => self::$_mYELLOW_CONCRETE_FENCE_GATE = $v,
			"yellow_concrete_powder_slab" => fn(ConcretePowderSlab $v) => self::$_mYELLOW_CONCRETE_POWDER_SLAB = $v,
			"yellow_concrete_powder_stairs" => fn(ConcretePowderStair $v) => self::$_mYELLOW_CONCRETE_POWDER_STAIRS = $v,
			"yellow_concrete_wall" => fn(ConcreteWall $v) => self::$_mYELLOW_CONCRETE_WALL = $v,
			"yellow_wool_fence" => fn(WoolFence $v) => self::$_mYELLOW_WOOL_FENCE = $v,
			"yellow_wool_fence_gate" => fn(WoolFenceGate $v) => self::$_mYELLOW_WOOL_FENCE_GATE = $v,
			"yellow_wool_wall" => fn(WoolWall $v) => self::$_mYELLOW_WOOL_WALL = $v,
		];
	}

	private static function init() : void
	{
		//This nasty mess of closures allows us to suppress PHPStan type assignment errors in one place instead of
		//on every single assignment. This will only run one time on first init, so it's fine for performance.
		if (self::$initialized) {
			throw new \LogicException("Circular dependency detected - use RegistrySource->registerDelayed() if the circular dependency can't be avoided");
		}
		self::$initialized = true;
		$assigners = self::getInitAssigners();
		$assigned = [];
		$source = new LazuliBlocksInputs();
		foreach ($source->getAllValues() as $name => $value) {
			$assigner = $assigners[$name] ?? throw new \LogicException("Unexpected source registry member \"$name\" (code probably needs regenerating)");
			if (isset($assigned[$name])) {
				//this should be prevented by RegistrySource, but it doesn't hurt to have some redundancy
				throw new \LogicException("Repeated registry source member \"$name\"");
			}
			self::$members[mb_strtoupper($name)] = $value;
			$assigned[$name] = true;
			unset($assigners[$name]);
			self::unsafeAssign($assigner, $value);
		}
		if (count($assigners) > 0) {
			throw new \LogicException("Missing values for registry members (code probably needs regenerating): " . implode(", ", array_keys($assigners)));
		}
	}

	/**
	 * @return Transparent[]
	 * @phpstan-return array<string, Transparent>
	 */
	public static function getAll() : array
	{
		if (!isset(self::$members)) {
			self::init();
		}
		return Utils::cloneObjectArray(self::$members);
	}

	public static function AMETHYST_SLAB() : Slab
	{
		if (!isset(self::$_mAMETHYST_SLAB)) {
			self::init();
		}
		return clone self::$_mAMETHYST_SLAB;
	}

	public static function AMETHYST_STAIRS() : Stair
	{
		if (!isset(self::$_mAMETHYST_STAIRS)) {
			self::init();
		}
		return clone self::$_mAMETHYST_STAIRS;
	}

	public static function BLACK_CONCRETE_FENCE() : ConcreteFence
	{
		if (!isset(self::$_mBLACK_CONCRETE_FENCE)) {
			self::init();
		}
		return clone self::$_mBLACK_CONCRETE_FENCE;
	}

	public static function BLACK_CONCRETE_FENCE_GATE() : ConcreteFenceGate
	{
		if (!isset(self::$_mBLACK_CONCRETE_FENCE_GATE)) {
			self::init();
		}
		return clone self::$_mBLACK_CONCRETE_FENCE_GATE;
	}

	public static function BLACK_CONCRETE_POWDER_SLAB() : ConcretePowderSlab
	{
		if (!isset(self::$_mBLACK_CONCRETE_POWDER_SLAB)) {
			self::init();
		}
		return clone self::$_mBLACK_CONCRETE_POWDER_SLAB;
	}

	public static function BLACK_CONCRETE_POWDER_STAIRS() : ConcretePowderStair
	{
		if (!isset(self::$_mBLACK_CONCRETE_POWDER_STAIRS)) {
			self::init();
		}
		return clone self::$_mBLACK_CONCRETE_POWDER_STAIRS;
	}

	public static function BLACK_CONCRETE_WALL() : ConcreteWall
	{
		if (!isset(self::$_mBLACK_CONCRETE_WALL)) {
			self::init();
		}
		return clone self::$_mBLACK_CONCRETE_WALL;
	}

	public static function BLACK_WOOL_FENCE() : WoolFence
	{
		if (!isset(self::$_mBLACK_WOOL_FENCE)) {
			self::init();
		}
		return clone self::$_mBLACK_WOOL_FENCE;
	}

	public static function BLACK_WOOL_FENCE_GATE() : WoolFenceGate
	{
		if (!isset(self::$_mBLACK_WOOL_FENCE_GATE)) {
			self::init();
		}
		return clone self::$_mBLACK_WOOL_FENCE_GATE;
	}

	public static function BLACK_WOOL_WALL() : WoolWall
	{
		if (!isset(self::$_mBLACK_WOOL_WALL)) {
			self::init();
		}
		return clone self::$_mBLACK_WOOL_WALL;
	}

	public static function BLUE_CONCRETE_FENCE() : ConcreteFence
	{
		if (!isset(self::$_mBLUE_CONCRETE_FENCE)) {
			self::init();
		}
		return clone self::$_mBLUE_CONCRETE_FENCE;
	}

	public static function BLUE_CONCRETE_FENCE_GATE() : ConcreteFenceGate
	{
		if (!isset(self::$_mBLUE_CONCRETE_FENCE_GATE)) {
			self::init();
		}
		return clone self::$_mBLUE_CONCRETE_FENCE_GATE;
	}

	public static function BLUE_CONCRETE_POWDER_SLAB() : ConcretePowderSlab
	{
		if (!isset(self::$_mBLUE_CONCRETE_POWDER_SLAB)) {
			self::init();
		}
		return clone self::$_mBLUE_CONCRETE_POWDER_SLAB;
	}

	public static function BLUE_CONCRETE_POWDER_STAIRS() : ConcretePowderStair
	{
		if (!isset(self::$_mBLUE_CONCRETE_POWDER_STAIRS)) {
			self::init();
		}
		return clone self::$_mBLUE_CONCRETE_POWDER_STAIRS;
	}

	public static function BLUE_CONCRETE_WALL() : ConcreteWall
	{
		if (!isset(self::$_mBLUE_CONCRETE_WALL)) {
			self::init();
		}
		return clone self::$_mBLUE_CONCRETE_WALL;
	}

	public static function BLUE_ICE_SLAB() : Slab
	{
		if (!isset(self::$_mBLUE_ICE_SLAB)) {
			self::init();
		}
		return clone self::$_mBLUE_ICE_SLAB;
	}

	public static function BLUE_ICE_STAIRS() : Stair
	{
		if (!isset(self::$_mBLUE_ICE_STAIRS)) {
			self::init();
		}
		return clone self::$_mBLUE_ICE_STAIRS;
	}

	public static function BLUE_WOOL_FENCE() : WoolFence
	{
		if (!isset(self::$_mBLUE_WOOL_FENCE)) {
			self::init();
		}
		return clone self::$_mBLUE_WOOL_FENCE;
	}

	public static function BLUE_WOOL_FENCE_GATE() : WoolFenceGate
	{
		if (!isset(self::$_mBLUE_WOOL_FENCE_GATE)) {
			self::init();
		}
		return clone self::$_mBLUE_WOOL_FENCE_GATE;
	}

	public static function BLUE_WOOL_WALL() : WoolWall
	{
		if (!isset(self::$_mBLUE_WOOL_WALL)) {
			self::init();
		}
		return clone self::$_mBLUE_WOOL_WALL;
	}

	public static function BROWN_CONCRETE_FENCE() : ConcreteFence
	{
		if (!isset(self::$_mBROWN_CONCRETE_FENCE)) {
			self::init();
		}
		return clone self::$_mBROWN_CONCRETE_FENCE;
	}

	public static function BROWN_CONCRETE_FENCE_GATE() : ConcreteFenceGate
	{
		if (!isset(self::$_mBROWN_CONCRETE_FENCE_GATE)) {
			self::init();
		}
		return clone self::$_mBROWN_CONCRETE_FENCE_GATE;
	}

	public static function BROWN_CONCRETE_POWDER_SLAB() : ConcretePowderSlab
	{
		if (!isset(self::$_mBROWN_CONCRETE_POWDER_SLAB)) {
			self::init();
		}
		return clone self::$_mBROWN_CONCRETE_POWDER_SLAB;
	}

	public static function BROWN_CONCRETE_POWDER_STAIRS() : ConcretePowderStair
	{
		if (!isset(self::$_mBROWN_CONCRETE_POWDER_STAIRS)) {
			self::init();
		}
		return clone self::$_mBROWN_CONCRETE_POWDER_STAIRS;
	}

	public static function BROWN_CONCRETE_WALL() : ConcreteWall
	{
		if (!isset(self::$_mBROWN_CONCRETE_WALL)) {
			self::init();
		}
		return clone self::$_mBROWN_CONCRETE_WALL;
	}

	public static function BROWN_WOOL_FENCE() : WoolFence
	{
		if (!isset(self::$_mBROWN_WOOL_FENCE)) {
			self::init();
		}
		return clone self::$_mBROWN_WOOL_FENCE;
	}

	public static function BROWN_WOOL_FENCE_GATE() : WoolFenceGate
	{
		if (!isset(self::$_mBROWN_WOOL_FENCE_GATE)) {
			self::init();
		}
		return clone self::$_mBROWN_WOOL_FENCE_GATE;
	}

	public static function BROWN_WOOL_WALL() : WoolWall
	{
		if (!isset(self::$_mBROWN_WOOL_WALL)) {
			self::init();
		}
		return clone self::$_mBROWN_WOOL_WALL;
	}

	public static function BUDDING_AMETHYST_SLAB() : Slab
	{
		if (!isset(self::$_mBUDDING_AMETHYST_SLAB)) {
			self::init();
		}
		return clone self::$_mBUDDING_AMETHYST_SLAB;
	}

	public static function BUDDING_AMETHYST_STAIRS() : Stair
	{
		if (!isset(self::$_mBUDDING_AMETHYST_STAIRS)) {
			self::init();
		}
		return clone self::$_mBUDDING_AMETHYST_STAIRS;
	}

	public static function CALCITE_SLAB() : Slab
	{
		if (!isset(self::$_mCALCITE_SLAB)) {
			self::init();
		}
		return clone self::$_mCALCITE_SLAB;
	}

	public static function CALCITE_STAIRS() : Stair
	{
		if (!isset(self::$_mCALCITE_STAIRS)) {
			self::init();
		}
		return clone self::$_mCALCITE_STAIRS;
	}

	public static function CALCITE_WALL() : Wall
	{
		if (!isset(self::$_mCALCITE_WALL)) {
			self::init();
		}
		return clone self::$_mCALCITE_WALL;
	}

	public static function CLAY_SLAB() : ClaySlab
	{
		if (!isset(self::$_mCLAY_SLAB)) {
			self::init();
		}
		return clone self::$_mCLAY_SLAB;
	}

	public static function CLAY_STAIRS() : ClayStair
	{
		if (!isset(self::$_mCLAY_STAIRS)) {
			self::init();
		}
		return clone self::$_mCLAY_STAIRS;
	}

	public static function COARSE_DIRT_SLAB() : Slab
	{
		if (!isset(self::$_mCOARSE_DIRT_SLAB)) {
			self::init();
		}
		return clone self::$_mCOARSE_DIRT_SLAB;
	}

	public static function COARSE_DIRT_STAIRS() : Stair
	{
		if (!isset(self::$_mCOARSE_DIRT_STAIRS)) {
			self::init();
		}
		return clone self::$_mCOARSE_DIRT_STAIRS;
	}

	public static function CRIMSON_NYLIUM_SLAB() : NyliumSlab
	{
		if (!isset(self::$_mCRIMSON_NYLIUM_SLAB)) {
			self::init();
		}
		return clone self::$_mCRIMSON_NYLIUM_SLAB;
	}

	public static function CRIMSON_NYLIUM_STAIRS() : NyliumStair
	{
		if (!isset(self::$_mCRIMSON_NYLIUM_STAIRS)) {
			self::init();
		}
		return clone self::$_mCRIMSON_NYLIUM_STAIRS;
	}

	public static function CYAN_CONCRETE_FENCE() : ConcreteFence
	{
		if (!isset(self::$_mCYAN_CONCRETE_FENCE)) {
			self::init();
		}
		return clone self::$_mCYAN_CONCRETE_FENCE;
	}

	public static function CYAN_CONCRETE_FENCE_GATE() : ConcreteFenceGate
	{
		if (!isset(self::$_mCYAN_CONCRETE_FENCE_GATE)) {
			self::init();
		}
		return clone self::$_mCYAN_CONCRETE_FENCE_GATE;
	}

	public static function CYAN_CONCRETE_POWDER_SLAB() : ConcretePowderSlab
	{
		if (!isset(self::$_mCYAN_CONCRETE_POWDER_SLAB)) {
			self::init();
		}
		return clone self::$_mCYAN_CONCRETE_POWDER_SLAB;
	}

	public static function CYAN_CONCRETE_POWDER_STAIRS() : ConcretePowderStair
	{
		if (!isset(self::$_mCYAN_CONCRETE_POWDER_STAIRS)) {
			self::init();
		}
		return clone self::$_mCYAN_CONCRETE_POWDER_STAIRS;
	}

	public static function CYAN_CONCRETE_WALL() : ConcreteWall
	{
		if (!isset(self::$_mCYAN_CONCRETE_WALL)) {
			self::init();
		}
		return clone self::$_mCYAN_CONCRETE_WALL;
	}

	public static function CYAN_WOOL_FENCE() : WoolFence
	{
		if (!isset(self::$_mCYAN_WOOL_FENCE)) {
			self::init();
		}
		return clone self::$_mCYAN_WOOL_FENCE;
	}

	public static function CYAN_WOOL_FENCE_GATE() : WoolFenceGate
	{
		if (!isset(self::$_mCYAN_WOOL_FENCE_GATE)) {
			self::init();
		}
		return clone self::$_mCYAN_WOOL_FENCE_GATE;
	}

	public static function CYAN_WOOL_WALL() : WoolWall
	{
		if (!isset(self::$_mCYAN_WOOL_WALL)) {
			self::init();
		}
		return clone self::$_mCYAN_WOOL_WALL;
	}

	public static function DIRT_PATH_SLAB() : DirtPathSlab
	{
		if (!isset(self::$_mDIRT_PATH_SLAB)) {
			self::init();
		}
		return clone self::$_mDIRT_PATH_SLAB;
	}

	public static function DIRT_PATH_STAIRS() : DirtPathStair
	{
		if (!isset(self::$_mDIRT_PATH_STAIRS)) {
			self::init();
		}
		return clone self::$_mDIRT_PATH_STAIRS;
	}

	public static function DIRT_SLAB() : DirtSlab
	{
		if (!isset(self::$_mDIRT_SLAB)) {
			self::init();
		}
		return clone self::$_mDIRT_SLAB;
	}

	public static function DIRT_STAIRS() : DirtStair
	{
		if (!isset(self::$_mDIRT_STAIRS)) {
			self::init();
		}
		return clone self::$_mDIRT_STAIRS;
	}

	public static function DIRT_WITH_ROOTS_SLAB() : Slab
	{
		if (!isset(self::$_mDIRT_WITH_ROOTS_SLAB)) {
			self::init();
		}
		return clone self::$_mDIRT_WITH_ROOTS_SLAB;
	}

	public static function DIRT_WITH_ROOTS_STAIRS() : Stair
	{
		if (!isset(self::$_mDIRT_WITH_ROOTS_STAIRS)) {
			self::init();
		}
		return clone self::$_mDIRT_WITH_ROOTS_STAIRS;
	}

	public static function DRIPSTONE_SLAB() : Slab
	{
		if (!isset(self::$_mDRIPSTONE_SLAB)) {
			self::init();
		}
		return clone self::$_mDRIPSTONE_SLAB;
	}

	public static function DRIPSTONE_STAIRS() : Stair
	{
		if (!isset(self::$_mDRIPSTONE_STAIRS)) {
			self::init();
		}
		return clone self::$_mDRIPSTONE_STAIRS;
	}

	public static function DRIPSTONE_WALL() : Wall
	{
		if (!isset(self::$_mDRIPSTONE_WALL)) {
			self::init();
		}
		return clone self::$_mDRIPSTONE_WALL;
	}

	public static function END_STONE_SLAB() : Slab
	{
		if (!isset(self::$_mEND_STONE_SLAB)) {
			self::init();
		}
		return clone self::$_mEND_STONE_SLAB;
	}

	public static function END_STONE_STAIRS() : Stair
	{
		if (!isset(self::$_mEND_STONE_STAIRS)) {
			self::init();
		}
		return clone self::$_mEND_STONE_STAIRS;
	}

	public static function END_STONE_WALL() : Wall
	{
		if (!isset(self::$_mEND_STONE_WALL)) {
			self::init();
		}
		return clone self::$_mEND_STONE_WALL;
	}

	public static function GRASS_SLAB() : GrassSlab
	{
		if (!isset(self::$_mGRASS_SLAB)) {
			self::init();
		}
		return clone self::$_mGRASS_SLAB;
	}

	public static function GRASS_STAIRS() : GrassStair
	{
		if (!isset(self::$_mGRASS_STAIRS)) {
			self::init();
		}
		return clone self::$_mGRASS_STAIRS;
	}

	public static function GRAVEL_SLAB() : GravelSlab
	{
		if (!isset(self::$_mGRAVEL_SLAB)) {
			self::init();
		}
		return clone self::$_mGRAVEL_SLAB;
	}

	public static function GRAVEL_STAIRS() : GravelStair
	{
		if (!isset(self::$_mGRAVEL_STAIRS)) {
			self::init();
		}
		return clone self::$_mGRAVEL_STAIRS;
	}

	public static function GRAY_CONCRETE_FENCE() : ConcreteFence
	{
		if (!isset(self::$_mGRAY_CONCRETE_FENCE)) {
			self::init();
		}
		return clone self::$_mGRAY_CONCRETE_FENCE;
	}

	public static function GRAY_CONCRETE_FENCE_GATE() : ConcreteFenceGate
	{
		if (!isset(self::$_mGRAY_CONCRETE_FENCE_GATE)) {
			self::init();
		}
		return clone self::$_mGRAY_CONCRETE_FENCE_GATE;
	}

	public static function GRAY_CONCRETE_POWDER_SLAB() : ConcretePowderSlab
	{
		if (!isset(self::$_mGRAY_CONCRETE_POWDER_SLAB)) {
			self::init();
		}
		return clone self::$_mGRAY_CONCRETE_POWDER_SLAB;
	}

	public static function GRAY_CONCRETE_POWDER_STAIRS() : ConcretePowderStair
	{
		if (!isset(self::$_mGRAY_CONCRETE_POWDER_STAIRS)) {
			self::init();
		}
		return clone self::$_mGRAY_CONCRETE_POWDER_STAIRS;
	}

	public static function GRAY_CONCRETE_WALL() : ConcreteWall
	{
		if (!isset(self::$_mGRAY_CONCRETE_WALL)) {
			self::init();
		}
		return clone self::$_mGRAY_CONCRETE_WALL;
	}

	public static function GRAY_WOOL_FENCE() : WoolFence
	{
		if (!isset(self::$_mGRAY_WOOL_FENCE)) {
			self::init();
		}
		return clone self::$_mGRAY_WOOL_FENCE;
	}

	public static function GRAY_WOOL_FENCE_GATE() : WoolFenceGate
	{
		if (!isset(self::$_mGRAY_WOOL_FENCE_GATE)) {
			self::init();
		}
		return clone self::$_mGRAY_WOOL_FENCE_GATE;
	}

	public static function GRAY_WOOL_WALL() : WoolWall
	{
		if (!isset(self::$_mGRAY_WOOL_WALL)) {
			self::init();
		}
		return clone self::$_mGRAY_WOOL_WALL;
	}

	public static function GREEN_CONCRETE_FENCE() : ConcreteFence
	{
		if (!isset(self::$_mGREEN_CONCRETE_FENCE)) {
			self::init();
		}
		return clone self::$_mGREEN_CONCRETE_FENCE;
	}

	public static function GREEN_CONCRETE_FENCE_GATE() : ConcreteFenceGate
	{
		if (!isset(self::$_mGREEN_CONCRETE_FENCE_GATE)) {
			self::init();
		}
		return clone self::$_mGREEN_CONCRETE_FENCE_GATE;
	}

	public static function GREEN_CONCRETE_POWDER_SLAB() : ConcretePowderSlab
	{
		if (!isset(self::$_mGREEN_CONCRETE_POWDER_SLAB)) {
			self::init();
		}
		return clone self::$_mGREEN_CONCRETE_POWDER_SLAB;
	}

	public static function GREEN_CONCRETE_POWDER_STAIRS() : ConcretePowderStair
	{
		if (!isset(self::$_mGREEN_CONCRETE_POWDER_STAIRS)) {
			self::init();
		}
		return clone self::$_mGREEN_CONCRETE_POWDER_STAIRS;
	}

	public static function GREEN_CONCRETE_WALL() : ConcreteWall
	{
		if (!isset(self::$_mGREEN_CONCRETE_WALL)) {
			self::init();
		}
		return clone self::$_mGREEN_CONCRETE_WALL;
	}

	public static function GREEN_WOOL_FENCE() : WoolFence
	{
		if (!isset(self::$_mGREEN_WOOL_FENCE)) {
			self::init();
		}
		return clone self::$_mGREEN_WOOL_FENCE;
	}

	public static function GREEN_WOOL_FENCE_GATE() : WoolFenceGate
	{
		if (!isset(self::$_mGREEN_WOOL_FENCE_GATE)) {
			self::init();
		}
		return clone self::$_mGREEN_WOOL_FENCE_GATE;
	}

	public static function GREEN_WOOL_WALL() : WoolWall
	{
		if (!isset(self::$_mGREEN_WOOL_WALL)) {
			self::init();
		}
		return clone self::$_mGREEN_WOOL_WALL;
	}

	public static function LIGHT_BLUE_CONCRETE_FENCE() : ConcreteFence
	{
		if (!isset(self::$_mLIGHT_BLUE_CONCRETE_FENCE)) {
			self::init();
		}
		return clone self::$_mLIGHT_BLUE_CONCRETE_FENCE;
	}

	public static function LIGHT_BLUE_CONCRETE_FENCE_GATE() : ConcreteFenceGate
	{
		if (!isset(self::$_mLIGHT_BLUE_CONCRETE_FENCE_GATE)) {
			self::init();
		}
		return clone self::$_mLIGHT_BLUE_CONCRETE_FENCE_GATE;
	}

	public static function LIGHT_BLUE_CONCRETE_POWDER_SLAB() : ConcretePowderSlab
	{
		if (!isset(self::$_mLIGHT_BLUE_CONCRETE_POWDER_SLAB)) {
			self::init();
		}
		return clone self::$_mLIGHT_BLUE_CONCRETE_POWDER_SLAB;
	}

	public static function LIGHT_BLUE_CONCRETE_POWDER_STAIRS() : ConcretePowderStair
	{
		if (!isset(self::$_mLIGHT_BLUE_CONCRETE_POWDER_STAIRS)) {
			self::init();
		}
		return clone self::$_mLIGHT_BLUE_CONCRETE_POWDER_STAIRS;
	}

	public static function LIGHT_BLUE_CONCRETE_WALL() : ConcreteWall
	{
		if (!isset(self::$_mLIGHT_BLUE_CONCRETE_WALL)) {
			self::init();
		}
		return clone self::$_mLIGHT_BLUE_CONCRETE_WALL;
	}

	public static function LIGHT_BLUE_WOOL_FENCE() : WoolFence
	{
		if (!isset(self::$_mLIGHT_BLUE_WOOL_FENCE)) {
			self::init();
		}
		return clone self::$_mLIGHT_BLUE_WOOL_FENCE;
	}

	public static function LIGHT_BLUE_WOOL_FENCE_GATE() : WoolFenceGate
	{
		if (!isset(self::$_mLIGHT_BLUE_WOOL_FENCE_GATE)) {
			self::init();
		}
		return clone self::$_mLIGHT_BLUE_WOOL_FENCE_GATE;
	}

	public static function LIGHT_BLUE_WOOL_WALL() : WoolWall
	{
		if (!isset(self::$_mLIGHT_BLUE_WOOL_WALL)) {
			self::init();
		}
		return clone self::$_mLIGHT_BLUE_WOOL_WALL;
	}

	public static function LIGHT_GRAY_CONCRETE_FENCE() : ConcreteFence
	{
		if (!isset(self::$_mLIGHT_GRAY_CONCRETE_FENCE)) {
			self::init();
		}
		return clone self::$_mLIGHT_GRAY_CONCRETE_FENCE;
	}

	public static function LIGHT_GRAY_CONCRETE_FENCE_GATE() : ConcreteFenceGate
	{
		if (!isset(self::$_mLIGHT_GRAY_CONCRETE_FENCE_GATE)) {
			self::init();
		}
		return clone self::$_mLIGHT_GRAY_CONCRETE_FENCE_GATE;
	}

	public static function LIGHT_GRAY_CONCRETE_POWDER_SLAB() : ConcretePowderSlab
	{
		if (!isset(self::$_mLIGHT_GRAY_CONCRETE_POWDER_SLAB)) {
			self::init();
		}
		return clone self::$_mLIGHT_GRAY_CONCRETE_POWDER_SLAB;
	}

	public static function LIGHT_GRAY_CONCRETE_POWDER_STAIRS() : ConcretePowderStair
	{
		if (!isset(self::$_mLIGHT_GRAY_CONCRETE_POWDER_STAIRS)) {
			self::init();
		}
		return clone self::$_mLIGHT_GRAY_CONCRETE_POWDER_STAIRS;
	}

	public static function LIGHT_GRAY_CONCRETE_WALL() : ConcreteWall
	{
		if (!isset(self::$_mLIGHT_GRAY_CONCRETE_WALL)) {
			self::init();
		}
		return clone self::$_mLIGHT_GRAY_CONCRETE_WALL;
	}

	public static function LIGHT_GRAY_WOOL_FENCE() : WoolFence
	{
		if (!isset(self::$_mLIGHT_GRAY_WOOL_FENCE)) {
			self::init();
		}
		return clone self::$_mLIGHT_GRAY_WOOL_FENCE;
	}

	public static function LIGHT_GRAY_WOOL_FENCE_GATE() : WoolFenceGate
	{
		if (!isset(self::$_mLIGHT_GRAY_WOOL_FENCE_GATE)) {
			self::init();
		}
		return clone self::$_mLIGHT_GRAY_WOOL_FENCE_GATE;
	}

	public static function LIGHT_GRAY_WOOL_WALL() : WoolWall
	{
		if (!isset(self::$_mLIGHT_GRAY_WOOL_WALL)) {
			self::init();
		}
		return clone self::$_mLIGHT_GRAY_WOOL_WALL;
	}

	public static function LIME_CONCRETE_FENCE() : ConcreteFence
	{
		if (!isset(self::$_mLIME_CONCRETE_FENCE)) {
			self::init();
		}
		return clone self::$_mLIME_CONCRETE_FENCE;
	}

	public static function LIME_CONCRETE_FENCE_GATE() : ConcreteFenceGate
	{
		if (!isset(self::$_mLIME_CONCRETE_FENCE_GATE)) {
			self::init();
		}
		return clone self::$_mLIME_CONCRETE_FENCE_GATE;
	}

	public static function LIME_CONCRETE_POWDER_SLAB() : ConcretePowderSlab
	{
		if (!isset(self::$_mLIME_CONCRETE_POWDER_SLAB)) {
			self::init();
		}
		return clone self::$_mLIME_CONCRETE_POWDER_SLAB;
	}

	public static function LIME_CONCRETE_POWDER_STAIRS() : ConcretePowderStair
	{
		if (!isset(self::$_mLIME_CONCRETE_POWDER_STAIRS)) {
			self::init();
		}
		return clone self::$_mLIME_CONCRETE_POWDER_STAIRS;
	}

	public static function LIME_CONCRETE_WALL() : ConcreteWall
	{
		if (!isset(self::$_mLIME_CONCRETE_WALL)) {
			self::init();
		}
		return clone self::$_mLIME_CONCRETE_WALL;
	}

	public static function LIME_WOOL_FENCE() : WoolFence
	{
		if (!isset(self::$_mLIME_WOOL_FENCE)) {
			self::init();
		}
		return clone self::$_mLIME_WOOL_FENCE;
	}

	public static function LIME_WOOL_FENCE_GATE() : WoolFenceGate
	{
		if (!isset(self::$_mLIME_WOOL_FENCE_GATE)) {
			self::init();
		}
		return clone self::$_mLIME_WOOL_FENCE_GATE;
	}

	public static function LIME_WOOL_WALL() : WoolWall
	{
		if (!isset(self::$_mLIME_WOOL_WALL)) {
			self::init();
		}
		return clone self::$_mLIME_WOOL_WALL;
	}

	public static function MAGENTA_CONCRETE_FENCE() : ConcreteFence
	{
		if (!isset(self::$_mMAGENTA_CONCRETE_FENCE)) {
			self::init();
		}
		return clone self::$_mMAGENTA_CONCRETE_FENCE;
	}

	public static function MAGENTA_CONCRETE_FENCE_GATE() : ConcreteFenceGate
	{
		if (!isset(self::$_mMAGENTA_CONCRETE_FENCE_GATE)) {
			self::init();
		}
		return clone self::$_mMAGENTA_CONCRETE_FENCE_GATE;
	}

	public static function MAGENTA_CONCRETE_POWDER_SLAB() : ConcretePowderSlab
	{
		if (!isset(self::$_mMAGENTA_CONCRETE_POWDER_SLAB)) {
			self::init();
		}
		return clone self::$_mMAGENTA_CONCRETE_POWDER_SLAB;
	}

	public static function MAGENTA_CONCRETE_POWDER_STAIRS() : ConcretePowderStair
	{
		if (!isset(self::$_mMAGENTA_CONCRETE_POWDER_STAIRS)) {
			self::init();
		}
		return clone self::$_mMAGENTA_CONCRETE_POWDER_STAIRS;
	}

	public static function MAGENTA_CONCRETE_WALL() : ConcreteWall
	{
		if (!isset(self::$_mMAGENTA_CONCRETE_WALL)) {
			self::init();
		}
		return clone self::$_mMAGENTA_CONCRETE_WALL;
	}

	public static function MAGENTA_WOOL_FENCE() : WoolFence
	{
		if (!isset(self::$_mMAGENTA_WOOL_FENCE)) {
			self::init();
		}
		return clone self::$_mMAGENTA_WOOL_FENCE;
	}

	public static function MAGENTA_WOOL_FENCE_GATE() : WoolFenceGate
	{
		if (!isset(self::$_mMAGENTA_WOOL_FENCE_GATE)) {
			self::init();
		}
		return clone self::$_mMAGENTA_WOOL_FENCE_GATE;
	}

	public static function MAGENTA_WOOL_WALL() : WoolWall
	{
		if (!isset(self::$_mMAGENTA_WOOL_WALL)) {
			self::init();
		}
		return clone self::$_mMAGENTA_WOOL_WALL;
	}

	public static function MOSS_SLAB() : Slab
	{
		if (!isset(self::$_mMOSS_SLAB)) {
			self::init();
		}
		return clone self::$_mMOSS_SLAB;
	}

	public static function MOSS_STAIRS() : Stair
	{
		if (!isset(self::$_mMOSS_STAIRS)) {
			self::init();
		}
		return clone self::$_mMOSS_STAIRS;
	}

	public static function MUD_SLAB() : Slab
	{
		if (!isset(self::$_mMUD_SLAB)) {
			self::init();
		}
		return clone self::$_mMUD_SLAB;
	}

	public static function MUD_STAIRS() : Stair
	{
		if (!isset(self::$_mMUD_STAIRS)) {
			self::init();
		}
		return clone self::$_mMUD_STAIRS;
	}

	public static function MYCELIUM_SLAB() : MyceliumSlab
	{
		if (!isset(self::$_mMYCELIUM_SLAB)) {
			self::init();
		}
		return clone self::$_mMYCELIUM_SLAB;
	}

	public static function MYCELIUM_STAIRS() : MyceliumStair
	{
		if (!isset(self::$_mMYCELIUM_STAIRS)) {
			self::init();
		}
		return clone self::$_mMYCELIUM_STAIRS;
	}

	public static function NETHERRACK_SLAB() : NetherrackSlab
	{
		if (!isset(self::$_mNETHERRACK_SLAB)) {
			self::init();
		}
		return clone self::$_mNETHERRACK_SLAB;
	}

	public static function NETHERRACK_STAIRS() : NetherrackStair
	{
		if (!isset(self::$_mNETHERRACK_STAIRS)) {
			self::init();
		}
		return clone self::$_mNETHERRACK_STAIRS;
	}

	public static function NETHERRACK_WALL() : NetherrackWall
	{
		if (!isset(self::$_mNETHERRACK_WALL)) {
			self::init();
		}
		return clone self::$_mNETHERRACK_WALL;
	}

	public static function NETHER_WART_FENCE() : NexlyFence
	{
		if (!isset(self::$_mNETHER_WART_FENCE)) {
			self::init();
		}
		return clone self::$_mNETHER_WART_FENCE;
	}

	public static function NETHER_WART_FENCE_GATE() : FenceGate
	{
		if (!isset(self::$_mNETHER_WART_FENCE_GATE)) {
			self::init();
		}
		return clone self::$_mNETHER_WART_FENCE_GATE;
	}

	public static function NETHER_WART_SLAB() : Slab
	{
		if (!isset(self::$_mNETHER_WART_SLAB)) {
			self::init();
		}
		return clone self::$_mNETHER_WART_SLAB;
	}

	public static function NETHER_WART_STAIRS() : Stair
	{
		if (!isset(self::$_mNETHER_WART_STAIRS)) {
			self::init();
		}
		return clone self::$_mNETHER_WART_STAIRS;
	}

	public static function OBSIDIAN_FENCE() : NexlyFence
	{
		if (!isset(self::$_mOBSIDIAN_FENCE)) {
			self::init();
		}
		return clone self::$_mOBSIDIAN_FENCE;
	}

	public static function OBSIDIAN_FENCE_GATE() : FenceGate
	{
		if (!isset(self::$_mOBSIDIAN_FENCE_GATE)) {
			self::init();
		}
		return clone self::$_mOBSIDIAN_FENCE_GATE;
	}

	public static function OBSIDIAN_SLAB() : Slab
	{
		if (!isset(self::$_mOBSIDIAN_SLAB)) {
			self::init();
		}
		return clone self::$_mOBSIDIAN_SLAB;
	}

	public static function OBSIDIAN_STAIRS() : Stair
	{
		if (!isset(self::$_mOBSIDIAN_STAIRS)) {
			self::init();
		}
		return clone self::$_mOBSIDIAN_STAIRS;
	}

	public static function ORANGE_CONCRETE_FENCE() : ConcreteFence
	{
		if (!isset(self::$_mORANGE_CONCRETE_FENCE)) {
			self::init();
		}
		return clone self::$_mORANGE_CONCRETE_FENCE;
	}

	public static function ORANGE_CONCRETE_FENCE_GATE() : ConcreteFenceGate
	{
		if (!isset(self::$_mORANGE_CONCRETE_FENCE_GATE)) {
			self::init();
		}
		return clone self::$_mORANGE_CONCRETE_FENCE_GATE;
	}

	public static function ORANGE_CONCRETE_POWDER_SLAB() : ConcretePowderSlab
	{
		if (!isset(self::$_mORANGE_CONCRETE_POWDER_SLAB)) {
			self::init();
		}
		return clone self::$_mORANGE_CONCRETE_POWDER_SLAB;
	}

	public static function ORANGE_CONCRETE_POWDER_STAIRS() : ConcretePowderStair
	{
		if (!isset(self::$_mORANGE_CONCRETE_POWDER_STAIRS)) {
			self::init();
		}
		return clone self::$_mORANGE_CONCRETE_POWDER_STAIRS;
	}

	public static function ORANGE_CONCRETE_WALL() : ConcreteWall
	{
		if (!isset(self::$_mORANGE_CONCRETE_WALL)) {
			self::init();
		}
		return clone self::$_mORANGE_CONCRETE_WALL;
	}

	public static function ORANGE_WOOL_FENCE() : WoolFence
	{
		if (!isset(self::$_mORANGE_WOOL_FENCE)) {
			self::init();
		}
		return clone self::$_mORANGE_WOOL_FENCE;
	}

	public static function ORANGE_WOOL_FENCE_GATE() : WoolFenceGate
	{
		if (!isset(self::$_mORANGE_WOOL_FENCE_GATE)) {
			self::init();
		}
		return clone self::$_mORANGE_WOOL_FENCE_GATE;
	}

	public static function ORANGE_WOOL_WALL() : WoolWall
	{
		if (!isset(self::$_mORANGE_WOOL_WALL)) {
			self::init();
		}
		return clone self::$_mORANGE_WOOL_WALL;
	}

	public static function PACKED_ICE_SLAB() : Slab
	{
		if (!isset(self::$_mPACKED_ICE_SLAB)) {
			self::init();
		}
		return clone self::$_mPACKED_ICE_SLAB;
	}

	public static function PACKED_ICE_STAIRS() : Stair
	{
		if (!isset(self::$_mPACKED_ICE_STAIRS)) {
			self::init();
		}
		return clone self::$_mPACKED_ICE_STAIRS;
	}

	public static function PACKED_MUD_FENCE() : NexlyFence
	{
		if (!isset(self::$_mPACKED_MUD_FENCE)) {
			self::init();
		}
		return clone self::$_mPACKED_MUD_FENCE;
	}

	public static function PACKED_MUD_FENCE_GATE() : FenceGate
	{
		if (!isset(self::$_mPACKED_MUD_FENCE_GATE)) {
			self::init();
		}
		return clone self::$_mPACKED_MUD_FENCE_GATE;
	}

	public static function PACKED_MUD_SLAB() : Slab
	{
		if (!isset(self::$_mPACKED_MUD_SLAB)) {
			self::init();
		}
		return clone self::$_mPACKED_MUD_SLAB;
	}

	public static function PACKED_MUD_STAIRS() : Stair
	{
		if (!isset(self::$_mPACKED_MUD_STAIRS)) {
			self::init();
		}
		return clone self::$_mPACKED_MUD_STAIRS;
	}

	public static function PALE_MOSS_SLAB() : Slab
	{
		if (!isset(self::$_mPALE_MOSS_SLAB)) {
			self::init();
		}
		return clone self::$_mPALE_MOSS_SLAB;
	}

	public static function PALE_MOSS_STAIRS() : Stair
	{
		if (!isset(self::$_mPALE_MOSS_STAIRS)) {
			self::init();
		}
		return clone self::$_mPALE_MOSS_STAIRS;
	}

	public static function PINK_CONCRETE_FENCE() : ConcreteFence
	{
		if (!isset(self::$_mPINK_CONCRETE_FENCE)) {
			self::init();
		}
		return clone self::$_mPINK_CONCRETE_FENCE;
	}

	public static function PINK_CONCRETE_FENCE_GATE() : ConcreteFenceGate
	{
		if (!isset(self::$_mPINK_CONCRETE_FENCE_GATE)) {
			self::init();
		}
		return clone self::$_mPINK_CONCRETE_FENCE_GATE;
	}

	public static function PINK_CONCRETE_POWDER_SLAB() : ConcretePowderSlab
	{
		if (!isset(self::$_mPINK_CONCRETE_POWDER_SLAB)) {
			self::init();
		}
		return clone self::$_mPINK_CONCRETE_POWDER_SLAB;
	}

	public static function PINK_CONCRETE_POWDER_STAIRS() : ConcretePowderStair
	{
		if (!isset(self::$_mPINK_CONCRETE_POWDER_STAIRS)) {
			self::init();
		}
		return clone self::$_mPINK_CONCRETE_POWDER_STAIRS;
	}

	public static function PINK_CONCRETE_WALL() : ConcreteWall
	{
		if (!isset(self::$_mPINK_CONCRETE_WALL)) {
			self::init();
		}
		return clone self::$_mPINK_CONCRETE_WALL;
	}

	public static function PINK_WOOL_FENCE() : WoolFence
	{
		if (!isset(self::$_mPINK_WOOL_FENCE)) {
			self::init();
		}
		return clone self::$_mPINK_WOOL_FENCE;
	}

	public static function PINK_WOOL_FENCE_GATE() : WoolFenceGate
	{
		if (!isset(self::$_mPINK_WOOL_FENCE_GATE)) {
			self::init();
		}
		return clone self::$_mPINK_WOOL_FENCE_GATE;
	}

	public static function PINK_WOOL_WALL() : WoolWall
	{
		if (!isset(self::$_mPINK_WOOL_WALL)) {
			self::init();
		}
		return clone self::$_mPINK_WOOL_WALL;
	}

	public static function PODZOL_SLAB() : PodzolSlab
	{
		if (!isset(self::$_mPODZOL_SLAB)) {
			self::init();
		}
		return clone self::$_mPODZOL_SLAB;
	}

	public static function PODZOL_STAIRS() : PodzolStair
	{
		if (!isset(self::$_mPODZOL_STAIRS)) {
			self::init();
		}
		return clone self::$_mPODZOL_STAIRS;
	}

	public static function PURPLE_CONCRETE_FENCE() : ConcreteFence
	{
		if (!isset(self::$_mPURPLE_CONCRETE_FENCE)) {
			self::init();
		}
		return clone self::$_mPURPLE_CONCRETE_FENCE;
	}

	public static function PURPLE_CONCRETE_FENCE_GATE() : ConcreteFenceGate
	{
		if (!isset(self::$_mPURPLE_CONCRETE_FENCE_GATE)) {
			self::init();
		}
		return clone self::$_mPURPLE_CONCRETE_FENCE_GATE;
	}

	public static function PURPLE_CONCRETE_POWDER_SLAB() : ConcretePowderSlab
	{
		if (!isset(self::$_mPURPLE_CONCRETE_POWDER_SLAB)) {
			self::init();
		}
		return clone self::$_mPURPLE_CONCRETE_POWDER_SLAB;
	}

	public static function PURPLE_CONCRETE_POWDER_STAIRS() : ConcretePowderStair
	{
		if (!isset(self::$_mPURPLE_CONCRETE_POWDER_STAIRS)) {
			self::init();
		}
		return clone self::$_mPURPLE_CONCRETE_POWDER_STAIRS;
	}

	public static function PURPLE_CONCRETE_WALL() : ConcreteWall
	{
		if (!isset(self::$_mPURPLE_CONCRETE_WALL)) {
			self::init();
		}
		return clone self::$_mPURPLE_CONCRETE_WALL;
	}

	public static function PURPLE_WOOL_FENCE() : WoolFence
	{
		if (!isset(self::$_mPURPLE_WOOL_FENCE)) {
			self::init();
		}
		return clone self::$_mPURPLE_WOOL_FENCE;
	}

	public static function PURPLE_WOOL_FENCE_GATE() : WoolFenceGate
	{
		if (!isset(self::$_mPURPLE_WOOL_FENCE_GATE)) {
			self::init();
		}
		return clone self::$_mPURPLE_WOOL_FENCE_GATE;
	}

	public static function PURPLE_WOOL_WALL() : WoolWall
	{
		if (!isset(self::$_mPURPLE_WOOL_WALL)) {
			self::init();
		}
		return clone self::$_mPURPLE_WOOL_WALL;
	}

	public static function RED_CONCRETE_FENCE() : ConcreteFence
	{
		if (!isset(self::$_mRED_CONCRETE_FENCE)) {
			self::init();
		}
		return clone self::$_mRED_CONCRETE_FENCE;
	}

	public static function RED_CONCRETE_FENCE_GATE() : ConcreteFenceGate
	{
		if (!isset(self::$_mRED_CONCRETE_FENCE_GATE)) {
			self::init();
		}
		return clone self::$_mRED_CONCRETE_FENCE_GATE;
	}

	public static function RED_CONCRETE_POWDER_SLAB() : ConcretePowderSlab
	{
		if (!isset(self::$_mRED_CONCRETE_POWDER_SLAB)) {
			self::init();
		}
		return clone self::$_mRED_CONCRETE_POWDER_SLAB;
	}

	public static function RED_CONCRETE_POWDER_STAIRS() : ConcretePowderStair
	{
		if (!isset(self::$_mRED_CONCRETE_POWDER_STAIRS)) {
			self::init();
		}
		return clone self::$_mRED_CONCRETE_POWDER_STAIRS;
	}

	public static function RED_CONCRETE_WALL() : ConcreteWall
	{
		if (!isset(self::$_mRED_CONCRETE_WALL)) {
			self::init();
		}
		return clone self::$_mRED_CONCRETE_WALL;
	}

	public static function RED_SAND_SLAB() : FallableSlab
	{
		if (!isset(self::$_mRED_SAND_SLAB)) {
			self::init();
		}
		return clone self::$_mRED_SAND_SLAB;
	}

	public static function RED_SAND_STAIRS() : FallableStair
	{
		if (!isset(self::$_mRED_SAND_STAIRS)) {
			self::init();
		}
		return clone self::$_mRED_SAND_STAIRS;
	}

	public static function RED_WOOL_FENCE() : WoolFence
	{
		if (!isset(self::$_mRED_WOOL_FENCE)) {
			self::init();
		}
		return clone self::$_mRED_WOOL_FENCE;
	}

	public static function RED_WOOL_FENCE_GATE() : WoolFenceGate
	{
		if (!isset(self::$_mRED_WOOL_FENCE_GATE)) {
			self::init();
		}
		return clone self::$_mRED_WOOL_FENCE_GATE;
	}

	public static function RED_WOOL_WALL() : WoolWall
	{
		if (!isset(self::$_mRED_WOOL_WALL)) {
			self::init();
		}
		return clone self::$_mRED_WOOL_WALL;
	}

	public static function SAND_SLAB() : FallableSlab
	{
		if (!isset(self::$_mSAND_SLAB)) {
			self::init();
		}
		return clone self::$_mSAND_SLAB;
	}

	public static function SAND_STAIRS() : FallableStair
	{
		if (!isset(self::$_mSAND_STAIRS)) {
			self::init();
		}
		return clone self::$_mSAND_STAIRS;
	}

	public static function SNOW_SLAB() : Slab
	{
		if (!isset(self::$_mSNOW_SLAB)) {
			self::init();
		}
		return clone self::$_mSNOW_SLAB;
	}

	public static function SNOW_STAIRS() : Stair
	{
		if (!isset(self::$_mSNOW_STAIRS)) {
			self::init();
		}
		return clone self::$_mSNOW_STAIRS;
	}

	public static function SOUL_SOIL_SLAB() : SoulSoilSlab
	{
		if (!isset(self::$_mSOUL_SOIL_SLAB)) {
			self::init();
		}
		return clone self::$_mSOUL_SOIL_SLAB;
	}

	public static function SOUL_SOIL_STAIRS() : SoulSoilStair
	{
		if (!isset(self::$_mSOUL_SOIL_STAIRS)) {
			self::init();
		}
		return clone self::$_mSOUL_SOIL_STAIRS;
	}

	public static function SUSPICIOUS_GRAVEL_SLAB() : GravelSlab
	{
		if (!isset(self::$_mSUSPICIOUS_GRAVEL_SLAB)) {
			self::init();
		}
		return clone self::$_mSUSPICIOUS_GRAVEL_SLAB;
	}

	public static function SUSPICIOUS_GRAVEL_STAIRS() : GravelStair
	{
		if (!isset(self::$_mSUSPICIOUS_GRAVEL_STAIRS)) {
			self::init();
		}
		return clone self::$_mSUSPICIOUS_GRAVEL_STAIRS;
	}

	public static function SUSPICIOUS_SAND_SLAB() : FallableSlab
	{
		if (!isset(self::$_mSUSPICIOUS_SAND_SLAB)) {
			self::init();
		}
		return clone self::$_mSUSPICIOUS_SAND_SLAB;
	}

	public static function SUSPICIOUS_SAND_STAIRS() : FallableStair
	{
		if (!isset(self::$_mSUSPICIOUS_SAND_STAIRS)) {
			self::init();
		}
		return clone self::$_mSUSPICIOUS_SAND_STAIRS;
	}

	public static function WARPED_NYLIUM_SLAB() : NyliumSlab
	{
		if (!isset(self::$_mWARPED_NYLIUM_SLAB)) {
			self::init();
		}
		return clone self::$_mWARPED_NYLIUM_SLAB;
	}

	public static function WARPED_NYLIUM_STAIRS() : NyliumStair
	{
		if (!isset(self::$_mWARPED_NYLIUM_STAIRS)) {
			self::init();
		}
		return clone self::$_mWARPED_NYLIUM_STAIRS;
	}

	public static function WARPED_WART_FENCE() : NexlyFence
	{
		if (!isset(self::$_mWARPED_WART_FENCE)) {
			self::init();
		}
		return clone self::$_mWARPED_WART_FENCE;
	}

	public static function WARPED_WART_FENCE_GATE() : FenceGate
	{
		if (!isset(self::$_mWARPED_WART_FENCE_GATE)) {
			self::init();
		}
		return clone self::$_mWARPED_WART_FENCE_GATE;
	}

	public static function WARPED_WART_SLAB() : Slab
	{
		if (!isset(self::$_mWARPED_WART_SLAB)) {
			self::init();
		}
		return clone self::$_mWARPED_WART_SLAB;
	}

	public static function WARPED_WART_STAIRS() : Stair
	{
		if (!isset(self::$_mWARPED_WART_STAIRS)) {
			self::init();
		}
		return clone self::$_mWARPED_WART_STAIRS;
	}

	public static function WHITE_CONCRETE_FENCE() : ConcreteFence
	{
		if (!isset(self::$_mWHITE_CONCRETE_FENCE)) {
			self::init();
		}
		return clone self::$_mWHITE_CONCRETE_FENCE;
	}

	public static function WHITE_CONCRETE_FENCE_GATE() : ConcreteFenceGate
	{
		if (!isset(self::$_mWHITE_CONCRETE_FENCE_GATE)) {
			self::init();
		}
		return clone self::$_mWHITE_CONCRETE_FENCE_GATE;
	}

	public static function WHITE_CONCRETE_POWDER_SLAB() : ConcretePowderSlab
	{
		if (!isset(self::$_mWHITE_CONCRETE_POWDER_SLAB)) {
			self::init();
		}
		return clone self::$_mWHITE_CONCRETE_POWDER_SLAB;
	}

	public static function WHITE_CONCRETE_POWDER_STAIRS() : ConcretePowderStair
	{
		if (!isset(self::$_mWHITE_CONCRETE_POWDER_STAIRS)) {
			self::init();
		}
		return clone self::$_mWHITE_CONCRETE_POWDER_STAIRS;
	}

	public static function WHITE_CONCRETE_WALL() : ConcreteWall
	{
		if (!isset(self::$_mWHITE_CONCRETE_WALL)) {
			self::init();
		}
		return clone self::$_mWHITE_CONCRETE_WALL;
	}

	public static function WHITE_WOOL_FENCE() : WoolFence
	{
		if (!isset(self::$_mWHITE_WOOL_FENCE)) {
			self::init();
		}
		return clone self::$_mWHITE_WOOL_FENCE;
	}

	public static function WHITE_WOOL_FENCE_GATE() : WoolFenceGate
	{
		if (!isset(self::$_mWHITE_WOOL_FENCE_GATE)) {
			self::init();
		}
		return clone self::$_mWHITE_WOOL_FENCE_GATE;
	}

	public static function WHITE_WOOL_WALL() : WoolWall
	{
		if (!isset(self::$_mWHITE_WOOL_WALL)) {
			self::init();
		}
		return clone self::$_mWHITE_WOOL_WALL;
	}

	public static function YELLOW_CONCRETE_FENCE() : ConcreteFence
	{
		if (!isset(self::$_mYELLOW_CONCRETE_FENCE)) {
			self::init();
		}
		return clone self::$_mYELLOW_CONCRETE_FENCE;
	}

	public static function YELLOW_CONCRETE_FENCE_GATE() : ConcreteFenceGate
	{
		if (!isset(self::$_mYELLOW_CONCRETE_FENCE_GATE)) {
			self::init();
		}
		return clone self::$_mYELLOW_CONCRETE_FENCE_GATE;
	}

	public static function YELLOW_CONCRETE_POWDER_SLAB() : ConcretePowderSlab
	{
		if (!isset(self::$_mYELLOW_CONCRETE_POWDER_SLAB)) {
			self::init();
		}
		return clone self::$_mYELLOW_CONCRETE_POWDER_SLAB;
	}

	public static function YELLOW_CONCRETE_POWDER_STAIRS() : ConcretePowderStair
	{
		if (!isset(self::$_mYELLOW_CONCRETE_POWDER_STAIRS)) {
			self::init();
		}
		return clone self::$_mYELLOW_CONCRETE_POWDER_STAIRS;
	}

	public static function YELLOW_CONCRETE_WALL() : ConcreteWall
	{
		if (!isset(self::$_mYELLOW_CONCRETE_WALL)) {
			self::init();
		}
		return clone self::$_mYELLOW_CONCRETE_WALL;
	}

	public static function YELLOW_WOOL_FENCE() : WoolFence
	{
		if (!isset(self::$_mYELLOW_WOOL_FENCE)) {
			self::init();
		}
		return clone self::$_mYELLOW_WOOL_FENCE;
	}

	public static function YELLOW_WOOL_FENCE_GATE() : WoolFenceGate
	{
		if (!isset(self::$_mYELLOW_WOOL_FENCE_GATE)) {
			self::init();
		}
		return clone self::$_mYELLOW_WOOL_FENCE_GATE;
	}

	public static function YELLOW_WOOL_WALL() : WoolWall
	{
		if (!isset(self::$_mYELLOW_WOOL_WALL)) {
			self::init();
		}
		return clone self::$_mYELLOW_WOOL_WALL;
	}
}
