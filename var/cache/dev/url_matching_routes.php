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
        '/admin/cours' => [[['_route' => 'app_back_cours_index', '_controller' => 'App\\Controller\\Back\\CoursController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/cours/new' => [[['_route' => 'app_back_cours_new', '_controller' => 'App\\Controller\\Back\\CoursController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/matiere' => [[['_route' => 'app_back_matiere_index', '_controller' => 'App\\Controller\\Back\\MatiereController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/matiere/new' => [[['_route' => 'app_back_matiere_new', '_controller' => 'App\\Controller\\Back\\MatiereController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/back' => [[['_route' => 'app_back', '_controller' => 'App\\Controller\\BackController::index'], null, null, null, false, false, null]],
        '/dashboard' => [[['_route' => 'dashboard', '_controller' => 'App\\Controller\\DashboardController::index'], null, null, null, false, false, null]],
        '/admin/ai/generate-tips' => [[['_route' => 'app_back_ai_generate_tips', '_controller' => 'App\\Controller\\Enseignant\\AIController::generateTips'], null, ['POST' => 0], null, false, false, null]],
        '/enseignant/matiere' => [[['_route' => 'app_enseignant_matiere_index', '_controller' => 'App\\Controller\\Enseignant\\EnseignantCourseController::index'], null, ['GET' => 0], null, false, false, null]],
        '/enseignant/ai/generate-course-content' => [[['_route' => 'app_enseignant_ai_generate_course_content', '_controller' => 'App\\Controller\\Enseignant\\EnseignantCourseController::generateCourseContent'], null, ['POST' => 0], null, false, false, null]],
        '/enseignant/ai/generate-tips' => [[['_route' => 'app_enseignant_ai_generate_tips', '_controller' => 'App\\Controller\\Enseignant\\EnseignantCourseController::generateTips'], null, ['POST' => 0], null, false, false, null]],
        '/etudiant/dashboard' => [[['_route' => 'app_etudiant_dashboard', '_controller' => 'App\\Controller\\Etudiant\\EtudiantDashboardController::dashboard'], null, null, null, false, false, null]],
        '/etudiant/matiere' => [[['_route' => 'app_etudiant_matiere_catalog', '_controller' => 'App\\Controller\\Etudiant\\EtudiantDashboardController::matiereCatalog'], null, null, null, false, false, null]],
        '/etudiant/matiere/ajax-search' => [[['_route' => 'app_etudiant_matiere_search', '_controller' => 'App\\Controller\\Etudiant\\EtudiantDashboardController::ajaxSearch'], null, ['GET' => 0], null, false, false, null]],
        '/front' => [[['_route' => 'app_front', '_controller' => 'App\\Controller\\FrontController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\LogoutController::logout'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegisterController::register'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_reset_password', '_controller' => 'App\\Controller\\ResetPasswordController::resetPassword'], null, null, null, false, false, null]],
        '/users' => [[['_route' => 'app_users', '_controller' => 'App\\Controller\\UserController::index'], null, null, null, false, false, null]],
        '/adduser' => [[['_route' => 'app_adduser', '_controller' => 'App\\Controller\\UserController::addUser'], null, null, null, false, false, null]],
        '/users/pdf' => [[['_route' => 'app_users_pdf', '_controller' => 'App\\Controller\\UserController::generatePdf'], null, null, null, false, false, null]],
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
                .'|/admin/matiere/([^/]++)(?'
                    .'|/edit(*:233)'
                    .'|(*:241)'
                .')'
                .'|/e(?'
                    .'|nseignant/(?'
                        .'|matiere/([^/]++)/cours(?'
                            .'|(*:293)'
                            .'|/new(*:305)'
                        .')'
                        .'|cours/([^/]++)/(?'
                            .'|edit(*:336)'
                            .'|delete(*:350)'
                        .')'
                    .')'
                    .'|tudiant/(?'
                        .'|cours/([^/]++)/view(*:390)'
                        .'|matiere/([^/]++)/cours(*:420)'
                        .'|payment/(?'
                            .'|c(?'
                                .'|reate\\-session/([^/]++)(*:466)'
                                .'|ancel/([^/]++)(*:488)'
                            .')'
                            .'|success/([^/]++)(*:513)'
                        .')'
                    .')'
                    .'|dituser/([^/]++)(*:539)'
                .')'
                .'|/deleteuser/([^/]++)(*:568)'
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
        233 => [[['_route' => 'app_back_matiere_edit', '_controller' => 'App\\Controller\\Back\\MatiereController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        241 => [[['_route' => 'app_back_matiere_delete', '_controller' => 'App\\Controller\\Back\\MatiereController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        293 => [[['_route' => 'app_enseignant_cours_manage', '_controller' => 'App\\Controller\\Enseignant\\EnseignantCourseController::manageCours'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        305 => [[['_route' => 'app_enseignant_cours_new', '_controller' => 'App\\Controller\\Enseignant\\EnseignantCourseController::newCours'], ['id'], ['POST' => 0], null, false, false, null]],
        336 => [[['_route' => 'app_enseignant_cours_edit', '_controller' => 'App\\Controller\\Enseignant\\EnseignantCourseController::editCours'], ['id'], ['POST' => 0], null, false, false, null]],
        350 => [[['_route' => 'app_enseignant_cours_delete', '_controller' => 'App\\Controller\\Enseignant\\EnseignantCourseController::deleteCours'], ['id'], ['POST' => 0], null, false, false, null]],
        390 => [[['_route' => 'app_etudiant_cours_view', '_controller' => 'App\\Controller\\Etudiant\\CourseViewController::view'], ['id'], null, null, false, false, null]],
        420 => [[['_route' => 'app_etudiant_cours_list', '_controller' => 'App\\Controller\\Etudiant\\EtudiantDashboardController::coursList'], ['id'], null, null, false, false, null]],
        466 => [[['_route' => 'app_etudiant_payment_create_session', '_controller' => 'App\\Controller\\Etudiant\\PaymentController::createSession'], ['id'], ['POST' => 0, 'GET' => 1], null, false, true, null]],
        488 => [[['_route' => 'app_etudiant_payment_cancel', '_controller' => 'App\\Controller\\Etudiant\\PaymentController::cancel'], ['id'], null, null, false, true, null]],
        513 => [[['_route' => 'app_etudiant_payment_success', '_controller' => 'App\\Controller\\Etudiant\\PaymentController::success'], ['id'], null, null, false, true, null]],
        539 => [[['_route' => 'app_edituser', '_controller' => 'App\\Controller\\UserController::editUser'], ['id'], null, null, false, true, null]],
        568 => [
            [['_route' => 'app_deleteuser', '_controller' => 'App\\Controller\\UserController::deleteUser'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
