<?php
    include_once('../models/Conexion.php');
    $id = $_REQUEST['Id'];

    $sql = "SELECT * FROM reserva where ID = '$id'";

    $query = mysqli_query($conexion, $sql);
    $fila = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario-Admin</title>
    <link rel="stylesheet" href="/Elysium/style/AdminReserva.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="/Elysium/img/logo2.png" />
</head>
<body>
    <header>
        <?php
         require_once("header.php")
        ?>
    </header>
    <main>
        <form action ="AdminReservaEditarDato.php" method="POST">
            <div class = "mb-3">
                <label for="id" class="form-label">ID</label>
                <input type="text" class="form-control" placeholder="ID" name= "id" value = "<?php echo $fila['ID'] ?>">
            </div>
            <div class = "mb-3">
                <label class="form-label">Precio</label>
                <input type="text" class="form-control" placeholder="Precio" name= "PrecioReserva" value = "<?php echo $fila['PRECIO'] ?>">
            </div>
            <div class = "mb-3">
                <label class="form-label">FechaInicio</label>
                <input type="text" class="form-control" placeholder="FechaInicio" name= "FechaInicioReserva" value = "<?php echo $fila['FECHAINICIO'] ?>">
            </div>
            <div class = "mb-3">
                <label class="form-label">FechaFinal</label>
                <input type="text" class="form-control" placeholder="FechaFinal" name= "FechaFinalReserva" value = "<?php echo $fila['FECHAFINAL'] ?>">
            </div>
            <div class = "mb-3">
                <label class="form-label">IDUsur</label>
                <input type="text" class="form-control" placeholder="IDUsur" name= "IDUsur" value = "<?php echo $fila['IDUSUR'] ?>">
            </div>
            <div class = "container text-center">
                <button type="submit" class= "btn btn-primary">Editar Reserva</button>
                <a href="/AdminReserva.php" class="btn btn-dark">Regresar</a>
            </div>
        </form>

    
    </main>
    <footer>
      <?php
        require_once("footer.php")
        ?>
    </footer>
</body>
</html>