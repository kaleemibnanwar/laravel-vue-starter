<?php

return [

    /**
     * Permissions required and used in the application
     */

    'permissions' => [
        'subscription' => [
        ],
    ],

    'roles' => ['admin', 'super-admin', 'team-admin'],

    'associations' => [
        'super-admin' => [],

        'admin' => [],

        'team-admin' => [],
    ],


    /**
     * Add model names to ignore assigning or changing permissions.
     * These won't show up in view during permission group creation.
     *
     */

    'ignored' => [],

    'ignored_permissions' => []
];
