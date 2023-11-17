<?php
if(session_status() == PHP_SESSION_NONE){
  // Si no hay ninguna sesión iniciada, inicia una nueva
  session_start();
}
?>
<nav>
   <input type="checkbox" id="check">
   <label for="check" class="checkbtn">
    <i class="fas fa-bars"></i>
   </label>
   <a href="/Elysium/views/inicio.php" class="enlace">
      <img src="/Elysium/img/logo2.png" alt="" class="logo">
   </a>
    <ul>
      <li><a class="active" href="/Elysium/views/inicio.php">Inicio</a></li>
      <li><a href="/Elysium/views/Nosotros.php">Nosotros</a></li>
      <li><a href="/Elysium/views/ActualizarEliminar.php">Perfil</a></li>
      <li><a href="/Elysium/views/Reserva.php">Reserva</a></li>
      
      <?php
      if (isset($_SESSION['es_admin']) && $_SESSION['es_admin']) {
          echo '<li><a href="/Elysium/views/Admin.php">Admin</a></li>';
      }
      ?>
      <li><a href="/Elysium/views/cerrarSesion.php">Cerrar sesión</a></li>
    </ul>
</nav>