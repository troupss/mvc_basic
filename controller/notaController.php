    <?php
    require_once "model/nota.php";
    class NotaController
    {
        public function listar()
        {
            //Logica
            $nota = new Nota();

            $notes = $nota->mostrartot1('notes');

            require_once "views/nota/listar.php";
        }
        
        public function eliminarNota(){
            require_once "views/nota/esborrar.php";
        }
        public function crear()
        {
            require_once "views/nota/insertar.php"; 
        }
        public function editar()
        {
        }
        public function eliminar()
        {
        }

        public function mostrar()
        {
            echo "mostrar tot els usuaris";
        }
        public function insertar(){
            if (isset($_POST['submit'])) {
                $idusuari = $_POST['idusuari'];
                $titol = $_POST['titol'];
                $descripcio = $_POST['descripcio'];
    
    
                $nota = new Nota();
                $nota->setUsuari_id($idusuari);
                $nota->setTitol($titol);
                $nota->setDescripcio($descripcio);
                $guardar = $nota->guardar();
    
                header("Location: index.php?controller=nota&action=listar");
            } 
        }
        public function actualitzarAction() {
            if (isset($_POST['submit'])) {
                $id = $_POST['id'];
                $titol = $_POST['titol'];
                $descripcio = $_POST['descripcio'];
            
                $nota = new Nota();
                $nota->setId($id);
                $nota->setTitol($titol);
                $nota->setDescripcio($descripcio);
                $guardar = $nota->UpdateNota();  
                
                header("Location: index.php?controller=nota&action=listar");
            }
        }
        public function actualitzarNota(){
            $id = $_GET["id"];
            $nota = new Nota();
            $nota->setId($id);
            $notes = $nota->actualitzarMostrar();
            require_once "views/nota/actualitzar.php";
        }
        public function EsborrarNota(){
            $id = $_GET["id"];
            $nota = new Nota();
            $nota->setId($id);
            $notes = $nota->DeleteNota();
            
            header("Location: index.php?controller=nota&action=listar");
        }
                
    }
    ?>