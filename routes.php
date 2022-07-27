<?php



$router->get('', 'controllers/homeController.php');

$router->get('about', 'controllers/aboutController.php');
$router->get('contact', 'controllers/contactController.php');
$router->get('products', 'controllers/productsController.php');

$router->post('submit-form', 'controllers/submitFormController.php');
$router->post('create-task', 'controllers/submitNewTaskController.php');



