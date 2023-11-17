<?php
// procesar_formulario.php

require_once(realpath(dirname(__FILE__) . '/../Controller/ReservaController.php'));

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $accion = $_POST['accion'];

    // Crear una instancia del controlador
    $ReservaController = new ReservaController(); 

    switch ($accion) {
        case 'crear':
            // Recuperar los datos del formulario
            $fechaInic = $_POST['fechaInicio'];
            $precio = $_POST['precio'];
            session_start();
            $objUsu=$_SESSION['identificacion'];
            
            $IdUsur = $objUsu->ID;
            // Llamar al método para agregar un nuevo usuario
            $ReservaController->CrearReserva($fechaInic, $IdUsur, $precio);
            break;
        
        case 'editar':
            $fechaInic = $_POST['fechaInicio'];
            $precio = $_POST['precio'];
            session_start();
            $objUsu=$_SESSION['identificacion'];
            
            $IdUsur = $objUsu->ID;
            $ReservaController->ActualizarReserva($fechaInic,$IdUsur,$precio);
            break;
        
        case 'eliminar':
            // Recuperar el ID del usuario a eliminar (puedes incluir un campo oculto en el formulario)
            session_start();
            $objUsu=$_SESSION['identificacion'];
            
            $IdUsur = $objUsu->ID;

            // Llamar al método para eliminar un usuario
            $ReservaController->EliminarReserva($IdUsur);
            break;
        
        // Puedes agregar más casos según tus necesidades

        default:
            // Acción no válida
            echo 'Acción no válida.';
            break;
    }
} else {
    // Método de solicitud no válido
    echo 'Solicitud no válida.';
}
?>
