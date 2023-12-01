<?php
require_once "ModelBase.php";
class usuari extends ModelBase{
    public $id;
    public $nom;
    public $cognom;
    public $correu;
    public $contrasenya;

    public function __construct(){
        parent::__construct();
    }

    public function getContrasenya()
    {
        return $this->contrasenya;
    }

    public function setContrasenya($contrasenya)
    {
        $this->contrasenya = $contrasenya;

        return $this;
    }

    public function getCorreu()
    {
        return $this->correu;
    }

    public function setCorreu($correu)
    {
        $this->correu = $correu;

        return $this;
    }

    public function getCognom()
    {
        return $this->cognom;
    }

    public function setCognom($cognom)
    {
        $this->cognom = $cognom;

        return $this;
    }
 
    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;

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
        $sql = "INSERT INTO usuaris(nom, cognom, email, password, data) VALUES('{$this->nom}', '{$this->cognom}', '{$this->correu}', '{$this->contrasenya}', CURDATE());";
        $guardat = $this->db->query($sql);

        return $guardat;
    }
    public function UpdateUsuari(){
        $sql = "UPDATE usuaris SET nom = '{$this->nom}', cognom = '{$this->cognom}', email = '{$this->correu}', password = '{$this->contrasenya}' WHERE id = {$this->id};";
        $guardat = $this->db->query($sql);

        return $guardat;
    }
    public function actualitzarMostrar(){
        $sql = "SELECT * FROM usuaris WHERE id = {$this->id};";
        $guardat = $this->db->query($sql);

        return $guardat;
    }
    public function DeleteUsuari(){
        $sql = "DELETE FROM usuaris WHERE id = {$this->id};";
        $guardat = $this->db->query($sql);

        return $guardat;
    }

    
    
}
?>