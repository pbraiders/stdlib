# array_intersect_key_recursive

Recursively computes the intersection of arrays using keys for comparison.

## Description

```php
array_intersect_key_recursive ( array $array1, array $array2 ) : array
```

Returns an array containing all the entries of array1 which have keys that are present in $filter, recursively. See [array_intersect_key()](https://www.php.net/manual/en/function.array-intersect-key.php).

## Parameters

#### array1

The array with master keys to check.

#### array2

An array to compare keys against.

## Return Values

Returns an associative array containing all the entries of array1 which have keys that are present in array2.

## Examples

```php
<?php
$array1 = array(
    'a' => [
        'blue'  => 1,
        'red'  => 2,
        'green'  => 3,
        'purple' => 4,
    ],
    'b' => [
        'c' => [
            'blue'  => 1,
            'red'  => 2,
            'green'  => 3,
            'purple' => 4,
        ],
    ],
);
$array2 = array(
    'a' => [
        'green' => 5,
        'blue' => 6,
        'yellow' => 7,
        'cyan'   => 8,
    ],
    'b' => [
        'c' => [
            'red' => 5,
            'purple' => 6,
            'yellow' => 7,
            'cyan'   => 8,
        ],
    ],
);
print_r ( array_intersect_key_recursive ( $array1, $array2 ) );
?>
```

The above example will output:

```php
Array
(
    [a] => Array
        (
            [blue] => 1
            [green] => 3
        )

    [b] => Array
        (
            [c] => Array
                (
                    [red] => 2
                    [purple] => 4
                )

        )

)

```
