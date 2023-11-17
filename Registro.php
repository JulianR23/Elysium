<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="/Elysium/style/Registro.css" />
  <link rel="icon" type="image/x-icon" href="/Elysium/img/logo2.png" />
  <title>Registro</title>
</head>

<body>
  <section class="registrarse">
    <h1>Registrarse</h1>
    <form method="post" action="../index.php?controller=UsuarioController&action=procesarRegistro">
      <div class="contenedor-input-registrarse">
        <label for="nombre"> Nombre <span class="regi-req">*</span> </label>
        <input type="text" name="nombre" required />
      </div>
      <div class="contenedor-input-registrarse">
        <label for="id"> Cedula <span class="req">*</span> </label>
        <input type="text" name="id" required />
      </div>

      <div class="contenedor-input-registrarse">
        <label for="telefono"> Telefono <span class="req">*</span> </label>
        <input type="text" name="telefono" required />
      </div>
      <div class="contenedor-input-registrarse">
        <label for="email"> Email <span class="req">*</span> </label>
        <input type="email" name="email" required />
      </div>
      <div class="contenedor-input-registrarse">
        <label for="contrasena"> Contraseña <span class="req">*</span> </label>
        <input type="password" name="contrasena" required />
      </div>

      <input type="submit" name="registro.Usuario" class="button-registro" value="Registrarse" />
    </form>
  </section>
</body>

</html>