<?php
require_once 'config/config.php';
require_once 'controllers/AnimalController.php';

$controller = new AnimalController();

$action = $_GET['action'] ?? 'index';
$id = $_GET['id'] ?? null;

switch ($action) {
    case 'show':
        $controller->show($id);
        break;
    case 'create':
        $controller->create();
        break;
    case 'edit':
        $controller->edit($id);
        break;
    case 'delete':
        $controller->delete($id);
        break;
    case 'search':
        $controller->search();
        break;
    default:
        $controller->index();
        break;
}