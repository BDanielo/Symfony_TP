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
        '/admin/auteurs' => [[['_route' => 'admin.auteurs.index', '_controller' => 'App\\Controller\\Backend\\AuteurController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/auteurs/create' => [[['_route' => 'admin.auteurs.create', '_controller' => 'App\\Controller\\Backend\\AuteurController::create'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/categories' => [[['_route' => 'admin.categories.index', '_controller' => 'App\\Controller\\Backend\\CategorieController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/categories/create' => [[['_route' => 'admin.categories.create', '_controller' => 'App\\Controller\\Backend\\CategorieController::create'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/livres' => [[['_route' => 'admin.livres.index', '_controller' => 'App\\Controller\\Backend\\LivreController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/livres/create' => [[['_route' => 'admin.livres.create', '_controller' => 'App\\Controller\\Backend\\LivreController::create'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/auteurs' => [[['_route' => 'app.auteurs.index', '_controller' => 'App\\Controller\\Frontend\\AuteurController::index'], null, ['GET' => 0], null, false, false, null]],
        '/categories' => [[['_route' => 'app.categories.index', '_controller' => 'App\\Controller\\Frontend\\CategorieController::index'], null, ['GET' => 0], null, false, false, null]],
        '/' => [[['_route' => 'app.homepage', '_controller' => 'App\\Controller\\Frontend\\HomeController::index'], null, null, null, false, false, null]],
        '/livres' => [[['_route' => 'app.livres.index', '_controller' => 'App\\Controller\\Frontend\\LivreController::index'], null, ['GET' => 0], null, false, false, null]],
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
                .'|/a(?'
                    .'|dmin/(?'
                        .'|auteurs/([^/]++)/(?'
                            .'|update(*:241)'
                            .'|delete(*:255)'
                        .')'
                        .'|categories/([^/]++)/(?'
                            .'|update(*:293)'
                            .'|delete(*:307)'
                        .')'
                        .'|livres/([^/]++)/(?'
                            .'|update(*:341)'
                            .'|delete(*:355)'
                        .')'
                    .')'
                    .'|uteurs/details/([^/]++)(*:388)'
                .')'
                .'|/categories/details/([^/]++)(*:425)'
                .'|/livres/details/([^/]++)(*:457)'
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
        241 => [[['_route' => 'admin.auteurs.update', '_controller' => 'App\\Controller\\Backend\\AuteurController::update'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        255 => [[['_route' => 'admin.auteurs.delete', '_controller' => 'App\\Controller\\Backend\\AuteurController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        293 => [[['_route' => 'admin.categories.update', '_controller' => 'App\\Controller\\Backend\\CategorieController::update'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        307 => [[['_route' => 'admin.categories.delete', '_controller' => 'App\\Controller\\Backend\\CategorieController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        341 => [[['_route' => 'admin.livres.update', '_controller' => 'App\\Controller\\Backend\\LivreController::update'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        355 => [[['_route' => 'admin.livres.delete', '_controller' => 'App\\Controller\\Backend\\LivreController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        388 => [[['_route' => 'app.auteurs.show', '_controller' => 'App\\Controller\\Frontend\\AuteurController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        425 => [[['_route' => 'app.categories.show', '_controller' => 'App\\Controller\\Frontend\\CategorieController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        457 => [
            [['_route' => 'app.livres.show', '_controller' => 'App\\Controller\\Frontend\\LivreController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
