<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => false,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [
        'admin' => [
            'users' => 'c,r,u,d',
            'payments' => 'c,r,u,d',
            'projects' => 'c,r,u,d',
            'employees' => 'c,r,u,d',
            'trips' => 'c,r,u,d'
        ],
        'manager' => [
            'users' => 'c,r,u',
            'projects' => 'c,r,u',
            'employees' => 'c,r,u',
        ],
        'trips_entry_manager' => [
            'projects' => 'r',
            'trips' => 'c,r,u'
        ],
        'trips_payment_executive' => [
            'trips' => 'r',
            'projects' => 'r',
            'payments' => 'c','r','u'
        ]
    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
