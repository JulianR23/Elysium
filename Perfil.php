<?php
                session_start();
                $objUsu=$_SESSION['identificacion'];
                $cedula = $objUsu->ID;
                $nombre = $objUsu->NOMBRE;
                $telefono = $objUsu->TELEFONO;
                $correo = $objUsu->CORREO;
                $contrasena = $objUsu->CONTRASENA;
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Elysium/style/Perfil.css">
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
        

    <section class="Actualizar_Eliminar">
      <h1>Actualizar</h1>
      <br>
      <form method="post" action="../index.php?controller=UsuarioController&action=ProcesarActualizarEliminar">
        <div class="contenedor-input-registrarse">
            <label for = "id"> Cedula <span class="req">*</span> </label>
            <input type="text" name = "id"  value="<?php echo $cedula; ?>" readonly />
          </div>

        <div class="contenedor-input-registrarse">
          <label for = "nombre"> Nombre <span class="regi-req">*</span> </label>
          <input type="text" name = "nombre"  value="<?php echo $nombre; ?>" required />
        </div>

        <div class="contenedor-input-registrarse">
          <label for = "telefono"> Telefono <span class="req">*</span> </label>
          <input type="text"  name = "telefono"  value="<?php echo $telefono; ?>" required />
        </div>
        <div class="contenedor-input-registrarse">
          <label for = "email"> Email <span class="req">*</span> </label>
          <input type="email" name = "email"  value="<?php echo $correo; ?>" required />
        </div>
        <div class="contenedor-input-registrarse">
          <label for = "contrasena" > Contraseña <span class="req">*</span> </label>
          <input type="password" name = "contrasena" value="<?php echo $contrasena; ?>"required />
        </div>

        <input
          type="submit"
          name="registro.Usuario"
          class="button-registro"
          value="Actualizar"
        />
      </form>
      <?php
                $status = isset($_GET['status']) ? $_GET['status'] : '';
                if ($status === 'actualizado') {
                    echo '<p class="mensaje-exito">Perfil actualizado con éxito.</p>';
                } elseif ($status === 'error') {
                    echo '<p class="mensaje-error">Error al actualizar el perfil.</p>';
                }
        ?>
    </section>
    </main>
    <footer>
      <?php
        require_once("footer.php")
        ?>
    </footer>
</body>
</html>