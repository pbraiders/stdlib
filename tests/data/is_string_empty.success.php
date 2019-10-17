<?php

declare(strict_types=1);

return [
    'empty string' => [
        'input' => "",
        'expected' => true,
    ],
    'whitespaced string' => [
        'input' => "    ",
        'expected' => true,
    ],
    'zero string' => [
        'input' => "0",
        'expected' => false,
    ],
];
