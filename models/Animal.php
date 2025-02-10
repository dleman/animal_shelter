<?php
require_once 'config/database.php';

class Animal {
    private $apiClient;
    
    public function __construct() {
        $this->apiClient = new APIClient(XANO_API_URL);
    }
    
    public function getAll() {
        return $this->apiClient->get('/animal');
    }
    
    public function getById($id) {
        return $this->apiClient->get("/animal/{$id}");
    }
    
    public function create($data) {
        return $this->apiClient->post('/animal', [
            'name' => $data['name'],
            'species' => $data['species'],
            'adoption_status' => $data['adoption_status'],
            'description' => $data['description']
        ]);
    }
    
    public function update($id, $data) {
        return $this->apiClient->patch("/animal/{$id}", [
            'name' => $data['name'],
            'species' => $data['species'],
            'adoption_status' => $data['adoption_status'],
            'description' => $data['description']
        ]);
    }
    
    public function delete($id) {
        return $this->apiClient->delete("/animal/{$id}");
    }
    
    public function findByName($name) {
        error_log("Szukane imię: " . print_r($name, true));
        $name = urlencode($name);
        error_log("Zakodowane imię: " . print_r($name, true));
        return $this->apiClient->get("/animal?name={$name}"); 
    }
}