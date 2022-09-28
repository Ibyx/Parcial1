<?php
    require_once("models/estudiante_model.php");

    class estudiante_controller{
      
        public static function mostrar(){
            
            $estudiante[]=new estudiante(1,"Paul","Gomez",rand(0,100));
            $estudiante[]=new estudiante(2,"Marta","de la Rosa",rand(0,100));
            $estudiante[]=new estudiante(3,"Arodis","Mendez",rand(0,100));
            $estudiante[]=new estudiante(4,"Hector","Velasquez",rand(0,100));
            $estudiante[]=new estudiante(5,"Raul","Gomez",rand(0,100));
            $estudiante[]=new estudiante(6,"Julio","Perez",rand(0,100));
            $estudiante[]=new estudiante(7,"Jake","Smith",rand(0,100));
            $estudiante[]=new estudiante(8,"Roxana","Cabeza",rand(0,100));
            $estudiante[]=new estudiante(9,"Martina","Ramirez",rand(0,100));
            $estudiante[]=new estudiante(10,"Abril","Lopez",rand(0,100));

            return $estudiante;

        }
    }
?>