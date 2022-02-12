<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}



// CRUD RESTful Routes
$routes->get('/users-list', 'UserCrud::index');
$routes->get('/user-form', 'UserCrud::create');
$routes->post('/submit-form', 'UserCrud::store');
$routes->get('/edit-view/(:num)', 'UserCrud::singleUser/$1');
$routes->post('update', 'UserCrud::update');
$routes->get('delete/(:num)', 'UserCrud::delete/$1');

// custom routes

$routes->get('signup', 'UserController::signup');
$routes->get('signin', 'UserController::signin');
$routes->get('signout', 'UserController::signout');

$routes->group('', ['filter' => 'authGuard'], function($routes) {
    $routes->get('current-holdings', 'CurrentHoldingsController::index');
    $routes->get('news-feed', 'NewsFeedController::index');
    $routes->get('trade-history', 'TradeHistoryController::index');
    $routes->get('profile', 'ProfileController::index');
});


$routes->group('admin', ['namespace' => 'App\Controllers\Admin'], function($routes) {
    $routes->get('signin', 'AdminiController::signin');
    $routes->group('', ['namespace' => 'App\Controllers\Admin', 'filter' => 'authGuardAdmin'], function ($routes) {
        $routes->get('signout', 'AdminiController::signout');
        $routes->get('/', 'AdminiController::index');
        $routes->get('user-list', 'UserManageController::index');
        $routes->get('add-user', 'UserManageController::create');
        $routes->post('create-user', 'UserManageController::store');
        $routes->get('delete-user/(:num)', 'UserManageController::delete/$1');
        $routes->get('edit-user/(:num)', 'UserManageController::singleUser/$1');
        $routes->get('profile', 'UserManageController::profile');
        $routes->get('current-holding', 'CurrentHoldingController::index');
        $routes->get('current-holding/(:num)', 'CurrentHoldingController::current_holding/$1');
        $routes->get('quarterly-statements', 'QuarterlyStatementsController::index');
        $routes->get('quarterly-statements/(:num)', 'QuarterlyStatementsController::user_data/$1');
        $routes->get('transaction-history', 'CurrentHoldingController::transaction_history');
        $routes->get('payment-schedule', 'CurrentHoldingController::payment_schedule');
        $routes->get('bank-status', 'CurrentHoldingController::bank_status');
    });
});


// current-holdings

// internal-mail



