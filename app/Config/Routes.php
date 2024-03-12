<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/country-details/attraction/(:any)', 'details::holiday/$1');
$routes->get('/country-details/(:any)', 'details::index/$1');
$routes->get('/(:any)', 'Home::searchedCountry/$1');
?>
