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
        ['form', '/bonbon/add', 'GET'], // action, url, method
],
    'Bonbon' => [ // Controller
        ['index', '/bonbons', 'GET'], // action, url, method
    ],

    'User' => [ // Controller
        ['login', '/login', 'POST'], // action, url, method
        ['form', '/login', 'GET'], // action, url, method
        ['winner', '/api/winner', 'GET'],
    ],
];