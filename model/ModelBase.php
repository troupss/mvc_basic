<?php 
require_once 'config/database.php';

class ModelBase{

    public $db;

    public function __construct(){
        $this->db = database::conectar();
    }

    public function mostrartot1($tabla){
        $query = $this->db->query("SELECT * FROM $tabla ORDER BY id ASC");
        return $query;
    }
    
}