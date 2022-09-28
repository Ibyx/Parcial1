<?php  
    class estudiante {

        private $ID;
        private $nombre;
        private $apellido;
        private $nota;

        public function __construct($ID, $nombre, $apellido, $nota)
        {
            $this->ID = $ID;
            $this->nombre = $nombre;
            $this->apellido = $apellido;
            $this->nota = $nota;
        }

        public function setID($ID)
        {
            $this->ID = $ID;
        }

        public function getID()
        {
            return $this->ID;
        }

        public function setNombre($nombre)
        {
            $this->nombre = $nombre;
        }

        public function getNombre()
        {
            return $this->nombre;
        }

        public function setApellido($apellido)
        {
            $this->apellido = $apellido;
        }

        public function getApellido()
        {
            return $this->apellido;
        }

        public function setNota($nota)
        {
            $this->nota = $nota;
        }

        public function getNota()
        {
            return $this->nota;
        }

    }
?>