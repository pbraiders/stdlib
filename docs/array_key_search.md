# array_key_search

Searches the multi-dimensionnal array for a given located key and returns the value if successful.

## Description

```php
array_key_search( array $array1, array $array2 ) : ?mixed
```

!!! note
    Defined for multi-dimensionnal array but works also for non multi-dimensionnal array. Array1 and Array2 must have same dimension.

!!! warning
    The comparison is done in a case-sensitive manner.

## Parameters

#### array1

An array with keys to check.

#### array2

The array to compare key against. Must contains only one key by level.
If array1 is multi-dimensionnal then array2 must be multi-dimensionnal too.

## Return Values

Returns the value for the key if it is found in the array, NULL otherwise.

## Examples

Example #1

```php
<?php
$array1 = array(
    'a' => 'a',
    'b' => [
        'c' => 'c',
        'e' => [
            'f' => 'ff',
            'g' => 'g',
        ],
        'd' => 'd',
    ],
    'h' => 'h',
);

$array2 = array(
    'b' => [
        'e' => [
            'f' => true,
        ],
    ],
);

print_r( array_key_search( $array1, $array2 ));
?>
```

The above example will output:

```php
ff
```

Example #2

```php
<?php
$array1 = array(
    'a' => 'a',
    'b' => [
        'c' => 'c',
        'e' => [
            'f' => ['ff'],
            'g' => 'g',
        ],
        'd' => 'd',
    ],
    'h' => 'h',
);

$array2 = array(
    'b' => [
        'e' => [
            'f' => true,
        ],
    ],
);

print_r( array_key_search( $array1, $array2 ));
?>
```

The above example will output:

```php
Array (
    [0] => ff
)
```

Example #3

```php
<?php
$array1 = array(
    'a' => 'a',
    'b' => [
        'c' => 'c',
        'e' => [
            'f' => ['ff'],
            'g' => 'g',
        ],
        'd' => 'd',
    ],
    'h' => 'h',
);

$array2 = array(
    'b' => [
        'e' => [
            'z' => true,
        ],
    ],
);

print_r( array_key_search( $array1, $array2 ));
?>
```

The above example will output:

```php
NULL
```
