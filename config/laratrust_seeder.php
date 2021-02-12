<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users'    => false,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [
        'admin'                   => [
            'users' => 'c,r,u,d',
        ],
        'manager'                 => [
            'users'            => 'c,r,u',
            'projects'         => 'c,r,u',
            'employees'        => 'c,r,u',
            'offices'          => 'c,r,u',
            'consignees'       => 'c,r,u',
            'fleets'           => 'c,r,u',
            'trips'            => 'r',
            'payments'         => 'r',
            'razorpay'         => 'cp',
            'loading-points'   => 'c,r,u,d',
            'unloading-points' => 'c,r,u,d',
        ],
        'trips_entry_manager'     => [
            'trips'    => 'c,r,u',
            'projects' => 'r',
        ],
        'trips_payment_executive' => [
            'payments' => 'c,r,u',
            'projects' => 'r,u',
            'trips'    => 'r',
        ],
    ],

    'permissions_map' => [
        'c'  => 'create',
        'r'  => 'read',
        'u'  => 'update',
        'd'  => 'delete',
        'cp' => 'complete',
    ],
];
