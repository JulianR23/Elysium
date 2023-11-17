<?php 
    require_once(realpath(dirname(__FILE__) . '/../Clases/db.php'));
    class ReservaModel{
       
         //Conexion a base de datos
         private $db;
         public function __construct(){
             $this-> db = DataBase::connect();
         }

         public function Insertar($fechaInicio,$idUsur,$precio){
            
            if($this->Consultar($idUsur)==false){
                // Sumar un día a la fecha actual
                $nuevaFecha = date("Y-m-d", strtotime($fechaInicio . " +1 day"));

                $sql = "INSERT INTO reserva (PRECIO, FECHAINICIO, FECHAFINAL, IDUSUR) VALUES ({$precio}, '{$fechaInicio}', '{$nuevaFecha}', '{$idUsur}')";
                $save = $this->db->query($sql);
                $result = false;
                if($save){
                    $result = true;
                }
            }else{
                $result = false;
            }
            
            return $result;
        }

        public function Consultar ($idUsur){
            $sql = "SELECT * FROM reserva INNER JOIN usuario ON reserva.IDUSUR = usuario.ID WHERE usuario.ID = '{$idUsur}'";
            $save = $this->db->query($sql);
            $result = false;
            if($save && $save->num_rows==1){
                $result = true;
            }
            return $result;
        }
        public function ConsultarIDReserva ($idUsur){
            $sql = "SELECT reserva.ID FROM reserva INNER JOIN usuario ON reserva.IDUSUR = usuario.ID WHERE usuario.ID = '{$idUsur}'";
            $save = $this->db->query($sql);
            return $save;
        }

        public function Actualizar($fechaInicio,$idUsur,$precio){
            if($this->Consultar($idUsur)==false){
                $result = false;
            }else{
                // Sumar un día a la fecha actual
                $nuevaFecha = date("Y-m-d", strtotime($fechaInicio . " +1 day"));

                $IDReser= $this->ConsultarIDReserva($idUsur);
                if($IDReser && $IDReser->num_rows==1){
                    $reserva=$IDReser->fetch_object();
                    $sql = "UPDATE reserva SET PRECIO ='{$precio}',FECHAINICIO = '{$fechaInicio}', FECHAFINAL = '{$nuevaFecha}', IDUSUR = '{$idUsur}' WHERE ID = '{$reserva->ID}'";
                    $save = $this->db->query($sql);
                    if($save){
                        $result = true;
                    }else{
                        $result = false;
                    }
                }
            }
            return $result;
        }

        public function Eliminar($idUsur){
            if($this->Consultar($idUsur)==true){
                $IDReser= $this->ConsultarIDReserva($idUsur);
                if($IDReser && $IDReser->num_rows==1){
                    $reserva=$IDReser->fetch_object();
                    $sql = "DELETE FROM reserva WHERE ID = {$reserva->ID}";
                    $save = $this->db->query($sql);
                    if($save){
                        $result = true;
                    }else{
                        $result = false;
                    }
                }else{
                    $result = false;
                }
            }else{
                $result = false;
            }
        return $result;
    }





    }
?>