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

// Home > Change Password
Breadcrumbs::for(__('breadcrumbs.change-password'), function ($trail) {
    $trail->parent(__('breadcrumbs.home'));
    $trail->push(__('breadcrumbs.change-password'), route('change-password'));
});
// Home > Forgot Password
Breadcrumbs::for(__('breadcrumbs.forgot-password'), function ($trail) {
    $trail->parent(__('breadcrumbs.home'));
    $trail->push(__('breadcrumbs.forgot-password'), route('forgot.password.get'));
});
//Home > reset password
Breadcrumbs::for(__('breadcrumbs.reset-password'), function ($trail, $token) {
    $trail->parent(__('breadcrumbs.home'));
    $trail->push(__('breadcrumbs.reset-password'), route('reset.password.get', $token));
});