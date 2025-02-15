<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'app_admin', '_controller' => 'App\\Controller\\AdminController::admin'], null, null, null, false, false, null]],
        '/cours' => [[['_route' => 'app_cours', '_controller' => 'App\\Controller\\CoursController::index'], null, ['GET' => 0], null, false, false, null]],
        '/cours/new' => [[['_route' => 'course_new', '_controller' => 'App\\Controller\\CoursController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\DefaultController::index'], null, null, null, false, false, null]],
        '/detailscours' => [[['_route' => 'app_detailscours', '_controller' => 'App\\Controller\\DetailscoursController::index'], null, null, null, false, false, null]],
        '/detailscoursanglais' => [[['_route' => 'app_detailscoursanglais', '_controller' => 'App\\Controller\\DetailscoursanglaisController::index'], null, null, null, false, false, null]],
        '/detailscoursarabe' => [[['_route' => 'app_detailscoursarabe', '_controller' => 'App\\Controller\\DetailscoursarabeController::index'], null, null, null, false, false, null]],
        '/detailscoursfrancais' => [[['_route' => 'app_detailscoursfrancais', '_controller' => 'App\\Controller\\DetailscoursfrancaisController::index'], null, null, null, false, false, null]],
        '/detailscourshistgeo' => [[['_route' => 'app_detailscourshistgeo', '_controller' => 'App\\Controller\\DetailscourshistgeoController::index'], null, null, null, false, false, null]],
        '/detailscoursmusique' => [[['_route' => 'app_detailscoursmusique', '_controller' => 'App\\Controller\\DetailscoursmusiqueController::index'], null, null, null, false, false, null]],
        '/detailscoursphysique' => [[['_route' => 'app_detailscoursphysique', '_controller' => 'App\\Controller\\DetailscoursphysiqueController::index'], null, null, null, false, false, null]],
        '/detailscoursscience' => [[['_route' => 'app_detailscoursscience', '_controller' => 'App\\Controller\\DetailscoursscienceController::index'], null, null, null, false, false, null]],
        '/signup' => [[['_route' => 'app_signup', '_controller' => 'App\\Controller\\SignupController::signup'], null, null, null, false, false, null]],
        '/teacher' => [[['_route' => 'teacher', '_controller' => 'App\\Controller\\TeacherController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/cours/([^/]++)/(?'
                    .'|edit(*:30)'
                    .'|delete(*:43)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        30 => [[['_route' => 'course_edit', '_controller' => 'App\\Controller\\CoursController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        43 => [
            [['_route' => 'course_delete', '_controller' => 'App\\Controller\\CoursController::delete'], ['id'], ['POST' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
