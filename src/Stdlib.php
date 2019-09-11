<?php

declare(strict_types=1);

/**
 * @package Pbraiders\Stdlib
 * @link    https://github.com/pbraiders/stdlib for the canonical source repository
 * @license https://github.com/pbraiders/stdlib/blob/master/LICENSE GNU General Public License v3.0 License.
 */

namespace Pbraiders\Stdlib;

/**
 * Sets the values of PHP configuration options.
 *
 * The array should be an associative array like:
 *  'php_option_name' => 'new_value_for_the_option'
 *
 * @see https://www.php.net/manual/en/function.array-walk.php
 * @param array $options
 * @return boolean
 */
function configurePHP(array $options): bool
{
    return array_walk($options, function (string $newvalue, string $option): void {
        @ini_set($option, (string) $newvalue);
    });
}

/**
 * Sort an array by key, recursively.
 *
 * @see https://www.php.net/manual/en/function.ksort.php
 * @param mixed $array
 * @return void
 */
function sortArrayByKey(&$array): void
{
    if (is_array($array)) {
        ksort($array, SORT_STRING);
        array_walk($array, '\Pbraiders\Stdlib\sortArrayByKey');
    }
}

/**
 * Test if a string is empty.
 *
 * @param string $value
 * @return boolean
 */
function isEmptyString(string $value): bool
{
    $bReturn = false;
    $sValue = trim($value);
    if (strlen($sValue) == 0) {
        $bReturn = true;
    }
    return $bReturn;
}

/**
 * Returns an array containing all the entries of array1 which have keys that are present in $filter, recursively.
 *
 * @param array $array1 The array with master keys to check.
 * @param array $filter The array to compare keys against.
 * @return array Returns an associative array containing all the entries of array1 which have keys that are present in
 * $filter.
 */
function intersectArrayByKey(array $array1, array $filter): array
{
    $array1 = array_intersect_key($array1, $filter);
    foreach ($array1 as $key => $value) {
        if (is_array($value) && is_array($filter[$key])) {
            $array1[$key] = intersectArrayByKey($value, $filter[$key]);
        }
    }
    return $array1;
}

/**
 * Checks if the given key or index exists in the array. At a specific depth.
 *
 * $array1 is a multi-dimensionnal array with many keys and values.
 *
 * $filter is the filter and should be with one key by depth level:
 * $filter = [
 *    'level1' => [
 *      'level2'=> [
 *         ... => [
 *           'the_key' => 'the_value',
 *           ],
 *         ],
 *       ],
 *    ],
 *
 * @param array $array1 The array with the key to check.
 * @param array $filter The array to compare key against. Must contains only one key, at any depth.
 * @return boolean Returns true if the key exists at the same depth.
 */
function existsDepthKeyInArray(array $array1, array $filter): bool
{
    $bReturn = false;

    // Use the intersect method.
    $aActual = intersectArrayByKey($array1, $filter);

    //If the key exists at the same depth both arrays have the same key count.
    if (\count($aActual, \COUNT_RECURSIVE) === \count($filter, \COUNT_RECURSIVE)) {
        $bReturn = true;
    }

    return $bReturn;
}

/**
 * Checks if the given key or index exists in the array. At a specific depth.
 *
 * $array1 is a multi-dimensionnal array with many keys and values.
 *
 * $filter is the filter and should be with one key by depth level:
 * $filter = [
 *    'level1' => [
 *      'level2'=> [
 *         ... => [
 *           'the_key' => 'the_value',
 *           ],
 *         ],
 *       ],
 *    ],
 *
 * @param array $array1 The array with the key to check.
 * @param array $filter The array to compare key against. Must contains only one key, at any depth.
 * @return mixed Returns the value
 */
function extractDepthKeyInArray(array $array1, array $filter)
{
    // Init
    $return = null;

    // The filter has only one key by level.
    // Looking for the array has the same key.
    foreach ($filter as $key => $value) {

        // Case: the key is missing. Stop.
        if (!array_key_exists($key, $array1)) {
            $return = null;
            break;
        }

        // Case: the key exists in $array1.
        // if $filter[$key] is not an array, that means we want to return $array1[$key]
        if (!is_array($value)) {
            $return = $array1[$key];
            break;
        }

        // Case: the key exists in $array1.
        // Case: $filter[$key] is an array. That means we looking for the key deeper.
        // If $array1[$key] is not an array. Stop.
        if (!is_array($array1[$key])) {
            $return = null;
            break;
        }

        // Case: the key exists in $array1.
        // Case: $filter[$key] is an array.
        // Case: $array1[$key] is an array.
        // Deep searching...
        $return = extractDepthKeyInArray($array1[$key], $value);
    }

    return $return;
}
