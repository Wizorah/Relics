<?php

namespace diamondgold\DummyItemsBlocks\util;

use InvalidArgumentException;

/**
 * Classe utilitaire pour diverses fonctions statiques du plugin DummyItemsBlocks.
 */
final class Utils
{
    /**
     * Constructeur privé pour empêcher l'instanciation.
     */
    private function __construct()
    {
    }

    /**
     * Génère un nom lisible à partir d'un identifiant de type 'minecraft:nom_id'.
     *
     * @param string $id
     * @return string
     */
    public static function generateNameFromId(string $id): string
    {
        $id = str_replace('minecraft:', '', $id);
        $words = explode('_', $id);
        $convertedText = '';
        foreach ($words as $word) {
            $convertedText .= ucfirst($word) . ' ';
        }
        return trim($convertedText);
    }

    /**
     * Retire un élément d'un tableau s'il est présent.
     *
     * @param string $id
     * @param string[] $list
     * @return bool True si l'élément a été retiré, false sinon.
     */
    public static function removeIfPresent(string $id, array &$list): bool
    {
        $key = array_search($id, $list, true);
        if ($key !== false) {
            unset($list[$key]);
            return true;
        }
        return false;
    }

    /**
     * Vérifie si une valeur entière est comprise dans un intervalle donné.
     *
     * @param int $value
     * @param int $min
     * @param int $max
     * @throws InvalidArgumentException si la valeur n'est pas dans l'intervalle.
     * @return void
     */
    public static function checkWithinBounds(int $value, int $min, int $max): void
    {
        if ($value < $min || $value > $max) {
            throw new InvalidArgumentException("Value must be between $min and $max, got $value");
        }
    }
}