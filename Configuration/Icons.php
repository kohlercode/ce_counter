<?php

declare(strict_types=1);

/**
 * Author: Simon Köhler (KOHLERCODE LLC)
 */

use TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider;

return [
    'ce-counter-icon' => [
        'provider' => SvgIconProvider::class,
        'source' => 'EXT:ce_counter/Resources/Public/Icons/Extension.svg',
    ],
    'ce-counter-record' => [
        'provider' => SvgIconProvider::class,
        'source' => 'EXT:ce_counter/Resources/Public/Icons/ce-countdown.svg',
    ],
];
