<?php
         $EM_CONF[$_EXTKEY] = [
             'title' => 'The Netcode Conflict Site Extension',
             'description' => 'All templates and assets for the website
             The Netcode Conflict',
             'category' => 'fe',
             'author' => 'A new TYPO3 star',
             'author_email' => 'nobody@acme.com',
             'state' => 'stable',
             'clearCacheOnLoad' => 1,
             'version' => '1.0.0',
             'constraints' => [
                 'depends' =>
                     [
                         'typo3' => '11.5.10',
                         'fluid_styled_content' => '11.5.10'
                     ],
                 'conflicts' => [],
                 'suggests' => [],
             ],
];