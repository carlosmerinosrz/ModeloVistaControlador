<?php
    class Lugar{
        private $conexion;

        public function __construct() {
            require '../configdb.php';
             $this->conexion = new mysqli(SERVIDOR, USUARIO, CONTRASENIA, BBDD);
            if ($this->conexion -> connect_error) {
                die("Error de conexion: ". $this->conexion->connect_error);
            }
        }
        public function crear($ip, $nombre, $descripcion){
            $consultarLugares = "SELECT * FROM `lugar` WHERE ip= '$ip'" ;
            $resultadoLugar = $this->conexion->query($consultarLugares);
            if($resultadoLugar->num_rows > 0)
                $mensaje= "La ip de la ciudad ya existe";
            $sql = "INSERT INTO lugar(ip, lugar, descripcion) VALUES('$ip', '$nombre', '$descripcion'); ";
            //echo $sql;
            if($this->conexion->query($sql)===TRUE){
                $mensaje=  "La ciudad se ha añadido correctamente";
            }
            else{
                $mensaje = "No se ha añadido la ciudad." /*.$this->conexion->error*/;
            }  
            return $mensaje;
        }
        public function listar(){
            $sql = "SELECT ip, lugar, descripcion FROM lugar";
            $resultado = $this->conexion->query($sql);
            $datos = [];

            while ($fila = $resultado->fetch_assoc()) {
                $datos[] = $fila;
            }
            return $datos;
        }

        public function borrar($ip){
            
            $sql = "DELETE FROM lugar WHERE ip = '$ip'";
            if ($this->conexion->query($sql) === TRUE) {
                $mensaje = "Lugar eliminado con éxito.";
            }
            return $mensaje;
        }

        public function modificar ($ip, $nuevoNombre, $nuevaDescripcion){
            //Comprobar que la nueva descripción no sea vacía
            $sqlExistencia = "SELECT ip FROM lugar WHERE ip = '$ip'";
            if($sqlExistencia->num_rows === 0){
                $this->conexion->close();
                $mensaje = "NO EXISTE LA IP";
            }
            $sql = "UPDATE lugar SET lugar = '$nuevoLugar', descripcion = '$nuevaDescripcion' WHERE ip = '$ip'";
            if ($this->conexion->query($sql) === TRUE) {
                $mensaje = "Lugar actualizado con éxito.";
            } else {
                $mensaje = "Error al actualizar el lugar: " . $this->conexion->error;
            }
            return $mensaje;
        }
        
    }
    
?>