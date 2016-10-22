<?php

/**
 * Configuration of Doctrine for this module.
 */

use Doctrine\ORM\EntityManager;
use User\Entity\User;

return [
    'doctrine' => [
        'authentication' => [
            'orm_default' => [
                'object_manager' => EntityManager::class,
                'identity_class' => User::class,
                'identity_property' => 'email',
                'credential_property' => 'password',
            ],
        ],
        'driver' => [
            'user_entity' => [
                'class' => 'Doctrine\ORM\Mapping\Driver\XmlDriver',
                'paths' => __DIR__ . '/mapping',
            ],
            'orm_default' => [
                'drivers' => [
                    'User\Entity' => 'user_entity',
                ],
            ],
        ],
    ],
];
