<?php 

    date_default_timezone_set('America/Santiago');

    class Visitas {
        public function conexion() {

            return mysqli_connect('localhost','root','','libro_visitas');

        
        }

        public function agregarVisita($datos){

            $conexion = $this-> conexion();
            $sql = "INSERT INTO t_visitas (apellidos, 
                                            departamento, 
                                            nombre, 
                                            motivo ,
                                            fecha,
                                            tarjeta) 
            VALUES (?,?,?,?,?,?)";

            $query = $conexion->prepare($sql);
            $query -> bind_param('ssssss', $datos['apellidos'],
                                        $datos['departamento'],
                                        $datos['nombre'],
                                        $datos['motivo'],
                                        $datos['fecha'],
                                        $datos['tarjeta']
                                    );

           
            return $query->execute();
            
        }
        

        public function mostrarDia(){
            $conexion= $this->conexion();
            $fecha = date('Y-m-d');
            $sql = "SELECT * FROM t_visitas WHERE  fecha like '%$fecha%' ORDER BY fecha DESC";
            $respuesta = mysqli_query($conexion,$sql);
            return mysqli_fetch_all($respuesta, MYSQLI_ASSOC);

           
        }


        public function mostrarTodos(){
            $conexion= $this->conexion();
       
            $sql = "SELECT * FROM t_visitas WHERE fecha < CURDATE() ORDER BY fecha DESC";
            $respuesta = mysqli_query($conexion,$sql);
            return mysqli_fetch_all($respuesta, MYSQLI_ASSOC);

           
        }



    }

?>