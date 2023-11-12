<?php
declare(strict_types=1);

namespace diamondgold\DummyItemsBlocks\tile;

use pocketmine\nbt\tag\CompoundTag;
use pocketmine\network\mcpe\convert\TypeConverter;

class NGDummyTiles extends DummyTile{

    protected function addAdditionalSpawnData(CompoundTag $nbt, TypeConverter $typeConverter) : void{
        $this->additionalSpawnData($nbt);
    }
}