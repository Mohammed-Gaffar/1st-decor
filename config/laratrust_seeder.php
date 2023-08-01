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

        'super_admin' => [
            'users' => 'c,r,u,d',
            'customers'=>'c,r,u,d',
            'contracts'=>'c,r,u,d',
            'reports' => 'c,r,u,d',
        ],

        'super_visor' => [
            'users' => 'c,r',
            'customers' => 'c,r,u,d',
            'reports' => 'c,r,',
        ],


        'user' => [
            'users' => 'c,r',
            'customers' => 'c,r,u,d',
            'reports' => 'c,r,',
        ],



    ],


    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete',
        'rp'=> 'report',

    ]
];
