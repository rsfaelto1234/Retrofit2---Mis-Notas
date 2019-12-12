<?php 

    class db {

        public function conectar(){

            //Datos de Conexion Hosting
            $user = "id11833925_haerul";
            $pass = "haerul1234";
            $host = "localhost";
            $db   = "id11833925_notes";
            

            /* Datos de Conexion Área Local
            $user = "root";
            $pass = "";
            $host = "localhost";
            $db   = "telemark";
            */
            
            try{
                $conexion = new PDO("mysql:host=$host;dbname=$db;",$user,$pass);
                $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $conexion;
            }catch(PDOException $e){
                echo "ERROR: " . $e->getMessage();
            }
            $conexion->close();

        }

    }    

?>