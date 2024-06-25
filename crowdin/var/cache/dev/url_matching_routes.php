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
        '/language' => [[['_route' => 'app_language_index', '_controller' => 'App\\Controller\\LanguageController::index'], null, ['GET' => 0], null, true, false, null]],
        '/language/new' => [[['_route' => 'app_language_new', '_controller' => 'App\\Controller\\LanguageController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/project' => [[['_route' => 'app_project_index', '_controller' => 'App\\Controller\\ProjectController::index'], null, ['GET' => 0], null, true, false, null]],
        '/project/new' => [[['_route' => 'app_project_new', '_controller' => 'App\\Controller\\ProjectController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/language/([^/]++)(?'
                    .'|(*:223)'
                    .'|/edit(*:236)'
                    .'|(*:244)'
                .')'
                .'|/project/([^/]++)(?'
                    .'|(*:273)'
                    .'|/edit(*:286)'
                    .'|(*:294)'
                .')'
                .'|/sources/([^/]++)(?'
                    .'|(*:323)'
                    .'|/(?'
                        .'|new(*:338)'
                        .'|edit(*:350)'
                    .')'
                    .'|(*:359)'
                .')'
                .'|/user/([^/]++)(?'
                    .'|(*:385)'
                    .'|/edit(*:398)'
                    .'|(*:406)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        223 => [[['_route' => 'app_language_show', '_controller' => 'App\\Controller\\LanguageController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        236 => [[['_route' => 'app_language_edit', '_controller' => 'App\\Controller\\LanguageController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        244 => [[['_route' => 'app_language_delete', '_controller' => 'App\\Controller\\LanguageController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        273 => [[['_route' => 'app_project_show', '_controller' => 'App\\Controller\\ProjectController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        286 => [[['_route' => 'app_project_edit', '_controller' => 'App\\Controller\\ProjectController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        294 => [[['_route' => 'app_project_delete', '_controller' => 'App\\Controller\\ProjectController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        323 => [[['_route' => 'app_sources_index', '_controller' => 'App\\Controller\\SourcesController::index'], ['id'], ['GET' => 0], null, false, true, null]],
        338 => [[['_route' => 'app_sources_new', '_controller' => 'App\\Controller\\SourcesController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        350 => [[['_route' => 'app_sources_edit', '_controller' => 'App\\Controller\\SourcesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        359 => [
            [['_route' => 'app_sources_show', '_controller' => 'App\\Controller\\SourcesController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_sources_delete', '_controller' => 'App\\Controller\\SourcesController::delete'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        385 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        398 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        406 => [
            [['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
