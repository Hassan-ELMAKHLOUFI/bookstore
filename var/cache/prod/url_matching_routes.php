<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/auteur' => [[['_route' => 'auteur_index', '_controller' => 'App\\Controller\\AuteurController::index'], null, ['GET' => 0], null, true, false, null]],
        '/auteur/new' => [[['_route' => 'auteur_new', '_controller' => 'App\\Controller\\AuteurController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/genre' => [[['_route' => 'genre_index', '_controller' => 'App\\Controller\\GenreController::index'], null, ['GET' => 0], null, true, false, null]],
        '/genre/new' => [[['_route' => 'genre_new', '_controller' => 'App\\Controller\\GenreController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/livre' => [[['_route' => 'livre_index', '_controller' => 'App\\Controller\\LivreController::index'], null, ['GET' => 0], null, true, false, null]],
        '/livre/new' => [[['_route' => 'livre_new', '_controller' => 'App\\Controller\\LivreController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\LoginController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/auteur/([^/]++)(?'
                    .'|(*:26)'
                    .'|/edit(*:38)'
                    .'|(*:45)'
                .')'
                .'|/genre/([^/]++)(?'
                    .'|(*:71)'
                    .'|/edit(*:83)'
                    .'|(*:90)'
                .')'
                .'|/livre/([^/]++)(?'
                    .'|(*:116)'
                    .'|/edit(*:129)'
                    .'|(*:137)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        26 => [[['_route' => 'auteur_show', '_controller' => 'App\\Controller\\AuteurController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        38 => [[['_route' => 'auteur_edit', '_controller' => 'App\\Controller\\AuteurController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        45 => [[['_route' => 'auteur_delete', '_controller' => 'App\\Controller\\AuteurController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        71 => [[['_route' => 'genre_show', '_controller' => 'App\\Controller\\GenreController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        83 => [[['_route' => 'genre_edit', '_controller' => 'App\\Controller\\GenreController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        90 => [[['_route' => 'genre_delete', '_controller' => 'App\\Controller\\GenreController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        116 => [[['_route' => 'livre_show', '_controller' => 'App\\Controller\\LivreController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        129 => [[['_route' => 'livre_edit', '_controller' => 'App\\Controller\\LivreController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        137 => [
            [['_route' => 'livre_delete', '_controller' => 'App\\Controller\\LivreController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
