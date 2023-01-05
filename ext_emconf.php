<?php

/** @var $_EXTKEY string */
$EM_CONF[$_EXTKEY] = [
    'title'            => 'sypets_example_shortcut_records_pages',
    'description'      => 'TYPO3 example for reproducing a TYPO3 issue: Record selector with pages',
    'version' => '1.0.0-dev',
    'state'            => 'beta',
    'clearcacheonload' => 0,
    'author'           => 'Sybille Peters',
    'author_email'     => 'sypets@gmx.de',
    'constraints'      => [
        'depends' => [
            'typo3' => '11.5.1-11.9.99',
        ],
    ],
];
