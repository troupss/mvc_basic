<?php
require_once "model/usuari.php";
require_once "model/ModelBase.php"; 

class usuariController{
    public function mostrar_tot(){
        $usuari = new usuari();
        $tot_els_usuaris = $usuari->mostrartot1('usuaris');
        require_once "views/usuaris/mostrar-tot.php";
    }
    public function crear(){
        require_once "views/usuaris/crear.php";
    }
    public function insertar(){
        if (isset($_POST['submit'])) {
            $nom = $_POST['nom'];
            $cognoms = $_POST['cognoms'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            
            $usuari = new usuari();
            $usuari->setNom($nom);
            $usuari->setCognom($cognoms);
            $usuari->setCorreu($email);
            $usuari->setContrasenya($password);
            $guardar = $usuari->guardar();

            header("Location: index.php?controller=usuari&action=mostrar_tot");
        }
    }
    public function actualitzarAction(){
        if (isset($_POST['submit'])) {
            $id = $_POST['id'];
            $nom = $_POST['nom'];
            $cognoms = $_POST['cognoms'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $usuari = new usuari();
            $usuari->setId($id);
            $usuari->setNom($nom);
            $usuari->setCognom($cognoms);
            $usuari->setCorreu($email);
            $usuari->setContrasenya($password);
            $guardar = $usuari->UpdateUsuari();

            header("Location: index.php?controller=usuari&action=mostrar_tot");
        }
    }
    public function actualitzarUsuari(){
        $id = $_GET["id"];
        $usuari = new usuari();
        $usuari->setId($id);
        $usuaris = $usuari->actualitzarMostrar();
        require_once "views/usuaris/actualitzar.php";
    }
    public function EsborrarUsuari(){
        $id = $_GET["id"];
        $usuari = new usuari();
        $usuari->setId($id);
        $usuaris = $usuari->DeleteUsuari();
        
        header("Location: index.php?controller=usuari&action=mostrar_tot");
    }
}
?>