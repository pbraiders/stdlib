<?php

declare(strict_types=1);

return [
    'search for a value' => [
        'input' => [
            'array1' => [
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
            ],
            'array2' => [
                'b' => [
                    'e' => [
                        'f' => true,
                    ],
                ],
            ],
        ],
        'expected' => 'ff'
    ],
    'array expected' => [
        'input' => [
            'array1' => [
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
            ],
            'array2' => [
                'b' => [
                    'd' => [
                        'g' => true,
                    ]
                ],
            ],
        ],
        'expected' => null,
    ],
    'missing key' => [
        'input' => [
            'array1' => [
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
            ],
            'array2' => [
                'b' => [
                    'g' => true,
                ],
            ],
        ],
        'expected' => null,
    ],
    'search for an array' => [
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
                'b' => [
                    'e' => true,
                ],
            ],
        ],
        'expected' => [
            'f' => 'f',
            'g' => 'g',
        ],
    ],
    'array1 is empty' => [
        'input' => [
            'array1' => [],
            'array2' => [
                'b' => [
                    'e' => true,
                ],
            ],
        ],
        'expected' => null,
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
        'expected' => null,
    ],
    'not multi-dimensionnal array' => [
        'input' => [
            'array1' => [
                'a' => 'a',
                'b' => 'b',
                'c' => 'c',
                'e' => 'e',
                'f' => 'ff',
                'g' => 'g',
                'd' => 'd',
                'h' => 'h',
            ],
            'array2' => [
                'f' => true,
            ],
        ],
        'expected' => 'ff'
    ],
];
