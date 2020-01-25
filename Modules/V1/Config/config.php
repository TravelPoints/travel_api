<?php
return [
    'name' => 'V1',
    'query_params'=> [
        'limit' => 15,
        'sort' => 'desc',
    ],
    'jwt'=> [
        'enabled' => true,
        'table' => 'user',
        'activate' => 30,
        'expires' => 3600,
    ],
    'state_machine'=> [
    ],
    'spell_check'=> [
        'tourguides'=> [
            'description'=> [
                'enabled' => true,
                'language' => 'en',
            ],
        ],
    ],
    'bit_mask'=> [
        'user'=> [
            'permissions'=> [
                'enabled' => true,
                'flags'=> [
                    'publisher' => 1,
                    'editor' => 2,
                    'manager' => 4,
                    'photo_reporter' => 8,
                    'admin' => 16,
                ],
            ],
        ],
    ],
    'cache'=> [
        'tour'=> [
            'enabled' => true,
            'stampede_xfetch' => true,
            'stampede_beta' => 1.1,
            'ttl' => 3600,
        ],
        'tourguides'=> [
            'enabled' => true,
            'stampede_xfetch' => true,
            'stampede_beta' => 1.1,
            'ttl' => 3600,
        ],
    ],
];