<?php

$header = <<<EOF
This file is part of the Table Data package

(c) Daniel Leech <daniel@dantleech.com>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.
EOF;

Symfony\CS\Fixer\Contrib\HeaderCommentFixer::setHeader($header);

return Symfony\CS\Config\Config::create()
    ->fixers(array(
        'header_comment',
        '-psr0',
        'psr4',
        'symfony',
        'concat_with_spaces',
        'concat_without_spaces',
        '-phpdoc_indent',
        '-phpdoc_params',
    ))
    ->finder(
        Symfony\CS\Finder\DefaultFinder::create()
            ->exclude('vendor')
            ->in(__DIR__)
    )
; 
