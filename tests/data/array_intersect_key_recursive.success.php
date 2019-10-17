<?php

declare(strict_types=1);

return [
    'deeper test' => [
        'input' => [
            'array1' => [
                'a' => 'a',
                'b' => [
                    'c' => 'c',
                    'e' => [
                        'f' => 'f',
                        'g' => 'g',
                    ],
                    'd' => 'd',
                ],
                'h' => 'h',
            ],
            'array2' => [
                'a' => 1,
                'b' => [
                    'e' => [
                        'g' => 2,
                    ],
                    'd' => 3,
                ],
            ],
        ],
        'expected' => [
            'a' => 'a',
            'b' => [
                'e' => [
                    'g' => 'g',
                ],
                'd' => 'd',
            ],
        ],
    ],
    'array2 is empty' => [
        'input' => [
            'array1' => [
                'a' => 'a',
                'b' => [
                    'c' => 'c',
                    'e' => [
                        'f' => 'f',
                        'g' => 'g',
                    ],
                    'd' => 'd',
                ],
                'h' => 'h',
            ],
            'array2' => [],
        ],
        'expected' => [],
    ],
    'array1 is empty' => [
        'input' => [
            'array1' => [],
            'array2' => [
                'a' => 1,
                'b' => [
                    'e' => [
                        'g' => 2,
                    ],
                    'd' => 3,
                ],
            ],
        ],
        'expected' => [],
    ],
    'example test' => [
        'input' => [
            'array1' => [
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
                    ]
                ],
            ],
            'array2' => [
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
            ],
        ],
        'expected' => [
            'a' => [
                'blue'  => 1,
                'green'  => 3,
            ],
            'b' => [
                'c' => [
                    'red'  => 2,
                    'purple' => 4,
                ],
            ],
        ],
    ],
];
