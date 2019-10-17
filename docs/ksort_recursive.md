# ksort_recursive

Recursively sorts an array by key.

## Description

```php
ksort_recursive( array &$array [,
    $unused = null,
    int $sort_flags = SORT_STRING ] ) : bool
```

Sorts recursively an array by key, maintaining key to data correlations. See [ksort()](https://www.php.net/manual/en/function.ksort.php).

## Parameters

#### array

The input array.

#### unused

The index. Used through recursion.

#### sort_flags

You may modify the behavior of the sort using the optional parameter sort_flags, for details see [sort()](https://www.php.net/manual/en/function.sort.php).

## Return Values

Returns TRUE on success or FALSE on failure.

## Examples

```php
<?php
$fruits = array(
    "banana"=>[
        "d"=>"Cavendish",
        "a"=>"Pisang Raja",
        "b"=>"Lady's Finger",
        "c"=>"Apple ",
        ],
    "apple"=>[
        "d"=>"Cortland",
        "a"=>"Empire",
        "b"=>"Fugi",
        "c"=>"Gala",
        ]
    );
ksort_recursive($fruits);
print_r($fruits);
?>
```

The above example will output:

```php
Array
(
    [apple] => Array
        (
            [a] => Empire
            [b] => Fugi
            [c] => Gala
            [d] => Cortland
        )
    [banana] => Array
        (
            [a] => Pisang Raja
            [b] => Lady's Finger
            [c] => Apple
            [d] => Cavendish
        )
)
```
