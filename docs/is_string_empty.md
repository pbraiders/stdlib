# is_string_empty

Determine whether a string is empty.

## Description

```php
is_string_empty( string $value ) : bool
```

Determine whether a string is considered to be empty. A string is considered empty if it's with whitespace stripped from the beginning and end and has length equal to zero.

## Parameters

#### value

String to be checked.

## Return Values

Returns FALSE if value has a non-empty, non-whitespace value. Otherwise returns TRUE.

The following values are considered to be empty:

- "" (an empty string)
- "      " (a whitespaced string)

The following values are considered to be non empty:

- "0" (0 as a string)
