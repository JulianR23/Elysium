<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="/Elysium/img/logo2.png" />
    <title>Reserva - Elysium</title>
    <link rel="stylesheet" href="../style/Reserva.css" />
</head>
<body>
  <header>
      <?php
       require_once("header.php")
        ?>
    </header>
    <section class="reserva">
        <h1>Reservar</h1>
        <form method="post" action="../Clases/ProcesarReserva.php">
        
         <div class="contenedor-input-reserva">
            <label for="fechaInicio">Fecha Inicio <span class="req">*</span></label>
            <input type="date" id="fechaInicio" name= "fechaInicio" required />
          </div>
        
          <script>
            var today = new Date();
            var dd = String(today.getDate()).padStart(2, '0');
            var mm = String(today.getMonth() + 1).padStart(2, '0'); // Enero es 0!
            var yyyy = today.getFullYear();
        
            today = yyyy + '-' + mm + '-' + dd;
            document.getElementById("fechaInicio").setAttribute("min", today);
          </script>
        
          
          <div class="contenedor-input-reserva">
            <label for="precio">Precio <span class="req">*</span></label>
            <input type="text" name="precio" value="400.000" onlyread required />
  
          <button type="submit" name="accion" class="button-reserva" value="crear">Crear Reserva</button>
          <button type="submit" name="accion" class="button-reserva" value="editar">Editar Reserva</button>
          <button type="submit" name="accion" class="button-reserva" value="eliminar">Eliminar Reserva</button>
        </form>
        <?php
                $status = isset($_GET['status']) ? $_GET['status'] : '';
                if ($status === 'Reservado') {
                  $message = "Reservado con éxito.";
                  echo "<script>showMessage('$mensaje');</script>";
                } elseif ($status === 'NoReservado') {
                    echo '<p class="mensaje-error">Error al reservar.</p>';
                }
        ?>
      </section>
      <footer>
    <?php
      require_once("footer.php")
    ?>
  </footer>
  <script>
        function showMessage(message) {
            alert(message);
        }
    </script>
</body>
</html>