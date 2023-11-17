<?php
    require_once(realpath(dirname(__FILE__) . '/../models/ReservaModel.php'));
    class ReservaController{

        public function CrearReserva($fechaInicio,$idUsur,$precio){
            $reserva = new ReservaModel();
            $reservado=$reserva->Insertar($fechaInicio,$idUsur,$precio);
            if ($reservado) {
                // Redirigir a la vista de éxito o a la lista de usuarios
                header("Location: ../views/Reserva.php");
                //exit();
            } else {
                //header("Location: index.php?controller=ReservaController&action=mostrarReserva");
                //exit();
            }  
        }
        public function EliminarReserva($id){
            $reserva = new ReservaModel();
            $reservado=$reserva->Eliminar($id);
            if ($reservado) {
                // Redirigir a la vista de éxito o a la lista de usuarios
                header("Location: ../views/Reserva.php");
                //exit();
            } else {
                //header("Location: index.php?controller=ReservaController&action=mostrarReserva");
                //exit();
            }  
        }

        public function ActualizarReserva($fechaInicio,$idUsur,$precio){
            $reserva = new ReservaModel();
            $reservado=$reserva->Actualizar($fechaInicio,$idUsur,$precio);
            if ($reservado) {
                // Redirigir a la vista de éxito o a la lista de usuarios
                header("Location: ../views/Reserva.php");
                //exit();
            } else {

                //header("Location: index.php?controller=ReservaController&action=mostrarReserva");
                //exit();
            }  
        }

        public function mostrarReserva() {
            include("views/Reserva.php");
        }
    }
?>    
