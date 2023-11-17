<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-Elysium</title>
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
        <div class="container bg-light p-3 border border-dark rounded ">
        <h1>Lista de Usuarios</h1>
        <br>
        <table class="table">
            <thead class="table-dark">
                
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Precio</th>
                <th scope="col">FechaInicio</th>
                <th scope="col">FechaFinal</th>
                <th scope="col">IDUsur</th>
                <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
            <?php
                include ("../models/Conexion.php");
                $sql = "SELECT * FROM reserva";
                $query = mysqli_query($conexion, $sql);

                $fila = mysqli_fetch_array($query);
                while ($fila = mysqli_fetch_array($query)){

               
                ?>
                <tr>    
                    <th scope = "row"><?php echo $fila['ID'] ?></th>
                    <th scope = "row"><?php echo $fila['PRECIO'] ?></th>
                    <th scope = "row"><?php echo $fila['FECHAINICIO'] ?></th>
                    <th scope = "row"><?php echo $fila['FECHAFINAL'] ?></th>
                    <th scope = "row"><?php echo $fila['IDUSUR'] ?></th>
                    <th scope = "row">
                        <a href="AdminReservaEditar.php?Id=<?php echo $fila['ID']?>" class="btn btn-warning">Editar Datos</a>
                        <a href="AdminReservaEliminar.php?Id=<?php echo $fila['ID']?>" class="btn btn-danger">Eliminar datos</a>
                    </th>
                </tr>
                <?php
                 }
                ?>
            </tbody>
        </table>
        </div>
    </main>
    <footer>
      <?php
        require_once("footer.php")
        ?>
    </footer>
</body>
</html>