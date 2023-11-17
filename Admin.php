<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-Elysium</title>
    <link rel="stylesheet" href="/Elysium/style/Admin.css">
    <link rel="icon" type="image/x-icon" href="/Elysium/img/logo2.png" />
</head>
<body>
    <header>
        <?php
         require_once("header.php")
        ?>
    </header>
    <main>
    <a class="BotonesRedirec" href="AdminReserva.php">Reservas</a>

    <br>


    <a class="BotonesRedirec" href="AdminUsuarios.php"> Usuarios</a>
    </main>
    <footer>
      <?php
        require_once("footer.php")
        ?>
    </footer>
</body>
</html>