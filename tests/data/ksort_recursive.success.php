<?php

declare(strict_types=1);

return [
    'keys are string type' => [
        'input' => [
            'c' => [
                'm' => 1,
                'k' => 1,
            ],
            'a' => [
                'z' => 1,
                'x' => 1,
                'y' => [
                    'h' => 1,
                    'g' => 1,
                    'i' => 1,
                ],
            ],
            'b' => 1,
        ],
        'expected' => [
            'a' => [
                'x' => 1,
                'y' => [
                    'g' => 1,
                    'h' => 1,
                    'i' => 1,
                ],
                'z' => 1,
            ],
            'b' => 1,
            'c' => [
                'k' => 1,
                'm' => 1,
            ],
        ],
    ],
    'keys are mixed type' => [
        'input' => [
            'c' => [
                'm' => 1,
                'k' => 1,
            ],
            1 => [
                'z' => [],
                'x' => 1,
                'y' => [
                    'h' => 1,
                    'g' => 1,
                    'i' => 1,
                ],
            ],
            'b' => 1,
        ],
        'expected' => [
            1 => [
                'x' => 1,
                'y' => [
                    'g' => 1,
                    'h' => 1,
                    'i' => 1,
                ],
                'z' => [],
            ],
            'b' => 1,
            'c' => [
                'k' => 1,
                'm' => 1,
            ],
        ],
    ],
    'array is empty' => [
        'input' => [],
        'expected' => [],
    ],
    'array has not key' => [
        'input' => ['c', 'a', 'b', ['e', 'd', 'f'],],
        'expected' => ['c', 'a', 'b', ['e', 'd', 'f'],],
    ],
];
