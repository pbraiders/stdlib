<?php

$finder = (new PhpCsFixer\Finder())
    ->in(dirname(__DIR__ . '/../..'))
    ->exclude('docs')
    ->exclude('tests')
    ->exclude('var')
    ->exclude('vendor');

return (new PhpCsFixer\Config())
    ->setRules([
        'concat_space' => ['spacing' => 'one'],
    ])
    ->setCacheFile('var/cache/.php-cs-fixer.cache')
    ->setFinder($finder);
