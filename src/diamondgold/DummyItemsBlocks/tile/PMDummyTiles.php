<?php
declare(strict_types=1);

namespace diamondgold\DummyItemsBlocks\tile;

use pocketmine\nbt\tag\CompoundTag;

class PMDummyTiles extends DummyTile{

    /** @noinspection PhpHierarchyChecksInspection */
    protected function addAdditionalSpawnData(CompoundTag $nbt) : void{
        $this->additionalSpawnData($nbt);
    }
}