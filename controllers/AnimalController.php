<?php
require_once 'models/Animal.php';

class AnimalController {
    private $animalModel;
    
    public function __construct() {
        $this->animalModel = new Animal();
    }
    
    public function index() {
        $animals = $this->animalModel->getAll();
        require 'views/animal/index.php';
    }
    
    public function show($id) {
        $animal = $this->animalModel->getById($id);
        require 'views/animal/show.php';
    }
    
    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'name' => $_POST['name'],
                'species' => $_POST['species'],
                'adoption_status' => $_POST['adoption_status'],
                'description' => $_POST['description']
            ];
            
            $this->animalModel->create($data);
            header('Location: /');
            exit();
        }
        require 'views/animal/create.php';
    }
    
    public function edit($id) {
        $animal = $this->animalModel->getById($id);
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'name' => $_POST['name'],
                'species' => $_POST['species'],
                'adoption_status' => $_POST['adoption_status'],
                'description' => $_POST['description']
            ];
            
            $this->animalModel->update($id, $data);
            header('Location: /');
            exit();
        }
        require 'views/animal/edit.php';
    }
    
    public function delete($id) {
        if (!$id) {
            die('Error: anmial ID missing.');
        }
    
        $animal = $this->animalModel->getById($id);
        if (!$animal) {
            die('Error: animal does not exists.');
        }
    
        $this->animalModel->delete($id);
        header('Location: /');
        exit();
    }
    
    public function search() {
        $name = $_GET['name'] ?? '';
        $animals = $name ? $this->animalModel->findByName($name) : $this->animalModel->getAll();

        require 'views/animal/index.php';
    }
}
