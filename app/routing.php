<?php
/**
 * This file hold all routes definitions.
 *
 * PHP version 7
 *
 * @author   WCS <contact@wildcodeschool.fr>
 *
 * @link     https://github.com/WildCodeSchool/simple-mvc
 */

$routes = [

    'Bonbondex' => [ // Controller
        ['add', '/bonbon/add', 'POST'], // action, url, method
        ['show', '/user/{id:\d+}', 'GET'],
],
    'Bonbon' => [ // Controller
        ['index', '/bonbons', 'GET'], // action, url, method
    ],

    'User' => [ // Controller
        ['login', '/login', 'POST'], // action, url, method
        ['winner', '/winner', 'GET'],

    ],
];