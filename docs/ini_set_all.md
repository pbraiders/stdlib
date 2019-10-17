# ini_set_all

Sets the values of a PHP configuration options.

## Description

```php
ini_set_all ( array $options ) : bool
```

Sets the values of the given PHP configuration options. The configuration options will keep these new values during the script's execution, and will be restored at the script's ending. See [ini_set()](https://www.php.net/manual/en/function.ini-set.php).

## Parameters

#### options

The array should be an associative array like:

```php
    [
        'php_option_name_1' => 'new_value_for_the_option',
        'php_option_name_2' => 'new_value_for_the_option',
        ...
    ]
```

## Return Values

Returns TRUE.
