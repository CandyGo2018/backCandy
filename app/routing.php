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
    'User' => [ // Controller
        ['login', '/login', 'POST'], // action, url, method
        ['form', '/login', 'GET'], // action, url, method
    ],
];