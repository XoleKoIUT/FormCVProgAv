<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('Home', 'MainController::index');

//NavigationBar
$routes->get('AboutMe', 'NavigationBarController::AboutMe');
$routes->get('Interest', 'NavigationBarController::Interest');
$routes->get('Career', 'NavigationBarController::Career');
$routes->get('HardSkills', 'NavigationBarController::HardSkills');
$routes->get('SoftSkills', 'NavigationBarController::SoftSkills');
$routes->get('Project', 'NavigationBarController::Project');
$routes->get('Contact', 'NavigationBarController::Contact');

//ContactForm
$routes->post('MailController/traitement', 'MailController::traitement');
$routes->get('MailController/sendMail/(:any)', 'MailController::sendMail/$1');
