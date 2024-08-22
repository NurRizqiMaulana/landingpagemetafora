<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/iot', 'Home::iot');
$routes->get('/portfolio', 'Home::porto');
$routes->get('/point_of_sales', 'Home::pos');
$routes->get('/purchasing_system', 'Home::purchasing');
$routes->get('/tech_news', 'Home::technews');
$routes->get('/warehouse_management', 'Home::warehouse');
$routes->get('/finance_and_budgeting', 'Home::finance');
$routes->get('/accounting_system', 'Home::accounting');
$routes->get('/legal_and_administration', 'Home::lab');
$routes->get('/audit_system', 'Home::audit');
$routes->get('/project_management_system', 'Home::projectms');
$routes->get('/tax_system', 'Home::taxs');
$routes->get('/bussiness_intelligence', 'Home::bussiness');

$routes->get('/architect_management', 'Home::architect');

$routes->get('/web_development_services', 'Home::webds');
$routes->get('/web_development_pricelist', 'Home::webdp');

$routes->get('/coba', 'Home::coba');
