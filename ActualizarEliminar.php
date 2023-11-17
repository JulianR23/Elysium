<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Elysium/style/ActualizarEliminar.css">
    <link rel="icon" type="image/x-icon" href="/Elysium/img/logo2.png" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" />
    <title>Perfil</title>
</head>
<body>
    <header>
        <?php
         require_once("header.php")
        ?>
    </header>
    <main>
        
      
        <a class="BotonesRedirec" href="/Elysium/views/Perfil.php">Actualizar Perfil</a>

        <form method="post" action="../index.php?controller=UsuarioController&action=ProcesarEliminar">
         <input type="submit" name="eliminarCuenta" class="BotonEliminar" value="Eliminar Cuenta" />
        </form>
        <?php
                $status = isset($_GET['status']) ? $_GET['status'] : '';
                if ($status === 'error') {
                    echo '<p class="mensaje-exito">Error al eliminarPerfil.</p>';
                }
        ?>  
    </main>
    <footer>
      <?php
        require_once("footer.php")
        ?>
    </footer>
</body>
</html>