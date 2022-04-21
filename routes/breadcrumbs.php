<?php

// Tài liệu: https://github.com/davejamesmiller/laravel-breadcrumbs

// Home
Breadcrumbs::for(__('breadcrumbs.home'), function ($trail) {
    $trail->push(__('breadcrumbs.home'), route('home'));
});

// Home > Login
Breadcrumbs::for(__('breadcrumbs.login'), function ($trail) {
    $trail->parent(__('breadcrumbs.home'));
    $trail->push(__('breadcrumbs.login'), route('login'));
});

// Home > Register
Breadcrumbs::for(__('breadcrumbs.register'), function ($trail) {
    $trail->parent(__('breadcrumbs.home'));
    $trail->push(__('breadcrumbs.register'), route('register'));
});