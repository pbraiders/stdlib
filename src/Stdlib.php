<?php

declare(strict_types=1);

/**
 * @package Pbraiders\Stdlib
 * @link    https://github.com/pbraiders/stdlib for the canonical source repository
 * @license https://github.com/pbraiders/stdlib/blob/master/LICENSE GNU General Public License v3.0 License.
 */

namespace Pbraiders\Stdlib;

use RuntimeException;

/**
 * Sets the values of PHP configuration options.
 *
 * The array should be an associative array like:
 *  'php_option_name' => 'new_value_for_the_option'
 *
 * @see https://www.php.net/manual/en/function.array-walk.php
 * @param array $options
 * @return bool
 */
function ini_set_all(array $options): bool
{
    return \array_walk($options, function ($newvalue, $option): void {
        @\ini_set((string) $option, (string) $newvalue);
    });
}

/**
 * Sort an array by key, recursively.
 *
 * @see https://www.php.net/manual/en/function.ksort.php
 * @param mixed $array The input array.
 * @param mixed $unused the current index.
 * @param int $sort_flags Sorting behavior.
 * @return bool Returns TRUE on success or FALSE on failure.
 */
function ksort_recursive(&$array, $unused = null, int $sort_flags = SORT_STRING): bool
{
    $bReturn = true;
    if (\is_array($array)) {
        $bReturn = \ksort($array, $sort_flags);
        \array_walk($array, '\Pbraiders\Stdlib\ksort_recursive', $sort_flags);
    }
    return $bReturn;
}

/**
 * Test if a string is empty.
 *
 * @param string $value
 * @return boolean
 */
function is_string_empty(string $value): bool
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
 * @see https://www.php.net/manual/en/function.array_intersect_key.php
 * @param array $array1 The array with master keys to check.
 * @param array $array2 The array to compare keys against.
 * @return array Returns an associative array containing all the entries of array1 which have keys that are present in
 * $array2.
 */
function array_intersect_key_recursive(array $array1, array $array2): array
{
    $array1 = \array_intersect_key($array1, $array2);
    foreach ($array1 as $key => $value) {
        if (\is_array($value) && \is_array($array2[$key])) {
            $array1[$key] = array_intersect_key_recursive($value, $array2[$key]);
        }
    }
    return $array1;
}

/**
 * Searches the multi-dimensionnal array for a given located key and returns the value if successful.
 *
 * $array2 is the filter and should be with one key by level:
 * $array2 = [
 *   'the_key' => true,
 * ];
 * or
 * $array2 = [
 *   'level1' => [
 *     'level2'=> [
 *       ... => [
 *         'the_key' => true,
 *       ],
 *     ],
 *   ],
 * ];
 *
 * This function is using pointers and note recursion to avoid the nested call funtion limit overflow.
 * The comparison is done in a case-sensitive manner.
 *
 * @param array $array1 An array with keys to check. May be multi-dimensionnal.
 * @param array $array2 The array to compare key against. Must contains only one key by level.
 * @return mixed Returns the value
 */
function array_key_search(array $array1, array $array2)
{
    // Dealing with pointers.
    $return = null;
    $pArray1 = &$array1;
    $pArray2 = &$array2;

    // Searching ...
    while ($pArray2 !== null) {
        // Fetch the current array2 key
        $key = key($pArray2);

        // The array2 is empty
        if (is_null($key)) {
            $return = null;
            break;
        }

        // Fetch the current array2[$key] value
        $value = &$pArray2[$key];

        // Case: the key is missing in $array1. Stop.
        if (! array_key_exists($key, $pArray1)) {
            $return = null;
            break;
        }

        // Case: the key exists in $array1.
        // if $array2[$key] is not an array, that means we want to return $array1[$key]
        if (! is_array($value)) {
            $return = $pArray1[$key];
            break;
        }

        // Case: the key exists in $array1.
        // Case: $array2[$key] is an array. That means we looking for the deeper key.
        // If $array1[$key] is not an array. Stop.
        if (! is_array($pArray1[$key])) {
            $return = null;
            break;
        }

        // Case: the key exists in $array1.
        // Case: $array2[$key] is an array.
        // Case: $array1[$key] is an array.
        // Deep searching...
        $pArray1 = &$pArray1[$key];
        $pArray2 = &$pArray2[$key];
    }

    return $return;
}
