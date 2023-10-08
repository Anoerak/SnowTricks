<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/about' => [[['_route' => 'app_about', '_controller' => 'App\\Controller\\AboutController::index'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'app_contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/profile' => [[['_route' => 'app_profile', '_controller' => 'App\\Controller\\ProfileController::getProfile'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/signin' => [[['_route' => 'app_signin', '_controller' => 'App\\Controller\\SigninController::signin'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SigninController::logout'], null, null, null, false, false, null]],
        '/signup' => [[['_route' => 'app_signup', '_controller' => 'App\\Controller\\SignupController::signup'], null, null, null, false, false, null]],
        '/verify' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\SignupController::verifyUserEmail'], null, null, null, false, false, null]],
        '/new/trick' => [[['_route' => 'app_trick_new', '_controller' => 'App\\Controller\\TrickController::new'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/comment/delete/([^/]++)(*:193)'
                .'|/load\\-more\\-tricks/([^/]++)/([^/]++)(*:238)'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:282)'
                .'|/trick/(?'
                    .'|([^/]++)(*:308)'
                    .'|category/([^/]++)(*:333)'
                    .'|([^/]++)/(?'
                        .'|edit(*:357)'
                        .'|delete(?'
                            .'|(*:374)'
                            .'|/media/([^/]++)(*:397)'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        193 => [[['_route' => 'app_comment_delete', '_controller' => 'App\\Controller\\CommentController::deleteComment'], ['id'], null, null, false, true, null]],
        238 => [[['_route' => 'app_load_more_tricks', '_controller' => 'App\\Controller\\HomeController::loadMoreTricks'], ['lastTrickIndex', 'tricksMarker'], null, null, false, true, null]],
        282 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        308 => [[['_route' => 'app_trick', '_controller' => 'App\\Controller\\TrickController::index'], ['slug'], null, null, false, true, null]],
        333 => [[['_route' => 'app_trick_category', '_controller' => 'App\\Controller\\TrickController::category'], ['category'], null, null, false, true, null]],
        357 => [[['_route' => 'app_trick_edit', '_controller' => 'App\\Controller\\TrickController::edit'], ['slug'], null, null, false, false, null]],
        374 => [[['_route' => 'app_trick_delete', '_controller' => 'App\\Controller\\TrickController::delete'], ['slug'], null, null, false, false, null]],
        397 => [
            [['_route' => 'app_trick_delete_media', '_controller' => 'App\\Controller\\TrickController::deleteMedia'], ['slug', 'media_id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
