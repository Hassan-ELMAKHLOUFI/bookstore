<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'auteur_index' => [[], ['_controller' => 'App\\Controller\\AuteurController::index'], [], [['text', '/auteur/']], [], [], []],
    'auteur_new' => [[], ['_controller' => 'App\\Controller\\AuteurController::new'], [], [['text', '/auteur/new']], [], [], []],
    'auteur_show' => [['id'], ['_controller' => 'App\\Controller\\AuteurController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/auteur']], [], [], []],
    'auteur_edit' => [['id'], ['_controller' => 'App\\Controller\\AuteurController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/auteur']], [], [], []],
    'auteur_delete' => [['id'], ['_controller' => 'App\\Controller\\AuteurController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/auteur']], [], [], []],
    'genre_index' => [[], ['_controller' => 'App\\Controller\\GenreController::index'], [], [['text', '/genre/']], [], [], []],
    'genre_new' => [[], ['_controller' => 'App\\Controller\\GenreController::new'], [], [['text', '/genre/new']], [], [], []],
    'genre_show' => [['id'], ['_controller' => 'App\\Controller\\GenreController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/genre']], [], [], []],
    'genre_edit' => [['id'], ['_controller' => 'App\\Controller\\GenreController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/genre']], [], [], []],
    'genre_delete' => [['id'], ['_controller' => 'App\\Controller\\GenreController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/genre']], [], [], []],
    'livre_index' => [[], ['_controller' => 'App\\Controller\\LivreController::index'], [], [['text', '/livre/']], [], [], []],
    'livre_new' => [[], ['_controller' => 'App\\Controller\\LivreController::new'], [], [['text', '/livre/new']], [], [], []],
    'livre_show' => [['id'], ['_controller' => 'App\\Controller\\LivreController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/livre']], [], [], []],
    'livre_edit' => [['id'], ['_controller' => 'App\\Controller\\LivreController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/livre']], [], [], []],
    'livre_delete' => [['id'], ['_controller' => 'App\\Controller\\LivreController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/livre']], [], [], []],
    'login' => [[], ['_controller' => 'App\\Controller\\LoginController::index'], [], [['text', '/login']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
];
