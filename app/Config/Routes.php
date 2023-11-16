<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('Home', 'MainController::index');
$routes->get('mail/sendMail', 'MailController::sendMail');
$routes->get('AboutMe', 'NavigationBarController::AboutMe');
$routes->get('Interest', 'NavigationBarController::Interest');
$routes->get('Career', 'NavigationBarController::Career');
$routes->get('HardSkills', 'NavigationBarController::HardSkills');
$routes->get('SoftSkills', 'NavigationBarController::SoftSkills');
$routes->get('Project', 'NavigationBarController::Project');
