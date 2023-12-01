<?php 
require_once 'ModelBase.php';

class Nota extends ModelBase{
    public $id;
    public $usuari_id;
    public $titol;
    public $descripcio;
    public $data;

    public function __construct(){
        parent::__construct();
    }

    public function getUsuari_id()
    {
        return $this->usuari_id;
    }

    public function setUsuari_id($usuari_id)
    {
        $this->usuari_id = $usuari_id;

        return $this;
    }

    public function getTitol()
    {
        return $this->titol;
    }

    public function setTitol($titol)
    {
        $this->titol = $titol;

        return $this;
    }

    public function getDescripcio()
    {
        return $this->descripcio;
    }
 
    public function setDescripcio($descripcio)
    {
        $this->descripcio = $descripcio;

        return $this;
    }
    public function getData()
    {
        return $this->data;
    }
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }
    public function getId()
    {
        return $this->id;
    }
 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function guardar(){
        $sql = "INSERT INTO notes(usuari_id, titol, descripcio, data) VALUES({$this->usuari_id}, '{$this->titol}', '{$this->descripcio}', CURDATE());";

        $guardat = $this->db->query($sql);

        return $guardat;
    }
    public function UpdateNota(){
        $sql = "UPDATE `notes` SET `titol`='{$this->titol}',`descripcio`='{$this->descripcio}' WHERE `id`={$this->id};";
        var_dump($sql);
        $guardat = $this->db->query($sql);

        return $guardat;
    }
    public function actualitzarMostrar(){
        $sql = "SELECT * FROM notes WHERE id = {$this->id};";
        $guardat = $this->db->query($sql);

        return $guardat;
    }

    public function DeleteNota(){
        $sql = "DELETE FROM `notes` WHERE `id`={$this->id};";
        $guardat = $this->db->query($sql);

        return $guardat;
    }
    
}