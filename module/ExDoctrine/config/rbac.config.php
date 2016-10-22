<?php

/**
 * Rbac configuration of file of this module.
 */

use ZfcRbac\Guard\RoutePermissionsGuard;
use ZfcRbac\Role\InMemoryRoleProvider;

return [
    'zfc_rbac' => [
        'guards' => [
            RoutePermissionsGuard::class => [
                'doctrine_cli' => ['doctrine'],
            ],
        ],
        'role_provider' => [
            InMemoryRoleProvider::class => [
                'guest' => [
                    'permissions' => [
                        'doctrine'
                    ],
                ],
            ],
        ],
    ],
];
