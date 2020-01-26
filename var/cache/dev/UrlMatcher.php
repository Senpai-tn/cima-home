<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/addCategory' => [[['_route' => 'addCategoryForm', '_controller' => 'App\\Controller\\CategoryController::Show'], null, null, null, false, false, null]],
        '/addCategoryAction' => [[['_route' => 'addCategoryAction', '_controller' => 'App\\Controller\\CategoryController::AddCategory'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\SerieController::index'], null, null, null, false, false, null]],
        '/cart/show' => [[['_route' => 'cart', '_controller' => 'App\\Controller\\SerieController::showCart'], null, null, null, false, false, null]],
        '/check_out' => [[['_route' => 'check_out', '_controller' => 'App\\Controller\\SerieController::checkOut'], null, null, null, false, false, null]],
        '/about' => [[['_route' => 'about', '_controller' => 'App\\Controller\\SerieController::about'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\SerieController::contact'], null, null, null, false, false, null]],
        '/newserie' => [[['_route' => 'app_serie_newserie', '_controller' => 'App\\Controller\\SerieController::newSerie'], null, null, null, false, false, null]],
        '/search' => [[['_route' => 'app_serie_search', '_controller' => 'App\\Controller\\SerieController::search'], null, null, null, false, false, null]],
        '/send' => [[['_route' => 'app_serie_send', '_controller' => 'App\\Controller\\SerieController::send'], null, null, null, false, false, null]],
        '/register/confirmed' => [
            [['_route' => 'app_serie_confirmed', '_controller' => 'App\\Controller\\SerieController::Confirmed'], null, null, null, false, false, null],
            [['_route' => 'fos_user_registration_confirmed', '_controller' => 'fos_user.registration.controller:confirmedAction'], null, ['GET' => 0], null, false, false, null],
        ],
        '/deletecart' => [[['_route' => 'deleteCart', '_controller' => 'App\\Controller\\SerieController::deleteCart'], null, null, null, false, false, null]],
        '/vendeur' => [[['_route' => 'vendeur', '_controller' => 'App\\Controller\\UserController::Vendeur'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\UserController::Admin'], null, null, null, false, false, null]],
        '/error' => [[['_route' => 'error', '_controller' => 'App\\Controller\\UserController::accessNotGranted'], null, null, null, false, false, null]],
        '/notlogged' => [[['_route' => 'notLogged', '_controller' => 'App\\Controller\\UserController::notLogged'], null, null, null, false, false, null]],
        '/logged' => [[['_route' => 'logged', '_controller' => 'App\\Controller\\UserController::Logged'], null, null, null, false, false, null]],
        '/login_check' => [
            [['_route' => 'check', '_controller' => 'App\\Controller\\UserController::checkLogin'], null, null, null, false, false, null],
            [['_route' => 'fos_user_security_check', '_controller' => 'fos_user.security.controller:checkAction'], null, ['POST' => 0], null, false, false, null],
        ],
        '/profile' => [
            [['_route' => 'profile', '_controller' => 'App\\Controller\\UserController::profile'], null, null, null, false, false, null],
            [['_route' => 'fos_user_profile_show', '_controller' => 'fos_user.profile.controller:showAction'], null, ['GET' => 0], null, true, false, null],
        ],
        '/login' => [[['_route' => 'fos_user_security_login', '_controller' => 'fos_user.security.controller:loginAction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/logout' => [[['_route' => 'fos_user_security_logout', '_controller' => 'fos_user.security.controller:logoutAction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/profile/edit' => [[['_route' => 'fos_user_profile_edit', '_controller' => 'fos_user.profile.controller:editAction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'fos_user_registration_register', '_controller' => 'fos_user.registration.controller:registerAction'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/register/check-email' => [[['_route' => 'fos_user_registration_check_email', '_controller' => 'fos_user.registration.controller:checkEmailAction'], null, ['GET' => 0], null, false, false, null]],
        '/resetting/request' => [[['_route' => 'fos_user_resetting_request', '_controller' => 'fos_user.resetting.controller:requestAction'], null, ['GET' => 0], null, false, false, null]],
        '/resetting/send-email' => [[['_route' => 'fos_user_resetting_send_email', '_controller' => 'fos_user.resetting.controller:sendEmailAction'], null, ['POST' => 0], null, false, false, null]],
        '/resetting/check-email' => [[['_route' => 'fos_user_resetting_check_email', '_controller' => 'fos_user.resetting.controller:checkEmailAction'], null, ['GET' => 0], null, false, false, null]],
        '/profile/change-password' => [[['_route' => 'fos_user_change_password', '_controller' => 'fos_user.change_password.controller:changePasswordAction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/deleteCategory/([^/]++)(*:66)'
                .'|/up(?'
                    .'|dateCategory/([^/]++)(*:100)'
                    .'|lodeAction/([^/]++)(*:127)'
                .')'
                .'|/(\\d+)(*:142)'
                .'|/addcart/([^/]++)(*:167)'
                .'|/d(?'
                    .'|elete(?'
                        .'|/([^/]++)(*:197)'
                        .'|User/([^/]++)(*:218)'
                    .')'
                    .'|isable/([^/]++)(*:242)'
                .')'
                .'|/update/([^/]++)(*:267)'
                .'|/s(?'
                    .'|ave/([^/]++)(*:292)'
                    .'|erie/delete/([^/]++)(*:320)'
                .')'
                .'|/enable/([^/]++)(*:345)'
                .'|/re(?'
                    .'|gister/confirm/([^/]++)(*:382)'
                    .'|setting/reset/([^/]++)(*:412)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        66 => [[['_route' => 'deleteCategory', '_controller' => 'App\\Controller\\CategoryController::deleteCategory'], ['id'], null, null, false, true, null]],
        100 => [[['_route' => 'updateCategoryForm', '_controller' => 'App\\Controller\\CategoryController::ShowForm'], ['id'], null, null, false, true, null]],
        127 => [[['_route' => 'updateCategory', '_controller' => 'App\\Controller\\CategoryController::UpdateCategory'], ['id'], null, null, false, true, null]],
        142 => [[['_route' => 'app_serie_showserie', '_controller' => 'App\\Controller\\SerieController::showSerie'], ['id'], null, null, false, true, null]],
        167 => [[['_route' => 'add_cart', '_controller' => 'App\\Controller\\SerieController::addCart'], ['id'], null, null, false, true, null]],
        197 => [[['_route' => 'app_serie_delete', '_controller' => 'App\\Controller\\SerieController::delete'], ['id'], null, null, false, true, null]],
        218 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::Delete'], ['id'], null, null, false, true, null]],
        242 => [[['_route' => 'app_user_disable', '_controller' => 'App\\Controller\\UserController::Disable'], ['id'], null, null, false, true, null]],
        267 => [[['_route' => 'app_serie_update', '_controller' => 'App\\Controller\\SerieController::update'], ['id'], null, null, false, true, null]],
        292 => [[['_route' => 'app_serie_save', '_controller' => 'App\\Controller\\SerieController::Save'], ['id'], null, null, false, true, null]],
        320 => [[['_route' => 'deleteFromCart', '_controller' => 'App\\Controller\\SerieController::DeleteFromCart'], ['id'], null, null, false, true, null]],
        345 => [[['_route' => 'app_user_enable', '_controller' => 'App\\Controller\\UserController::Enable'], ['id'], null, null, false, true, null]],
        382 => [[['_route' => 'fos_user_registration_confirm', '_controller' => 'fos_user.registration.controller:confirmAction'], ['token'], ['GET' => 0], null, false, true, null]],
        412 => [
            [['_route' => 'fos_user_resetting_reset', '_controller' => 'fos_user.resetting.controller:resetAction'], ['token'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
