<!--Julián Clavijo Restrepo
    Samuel Metaute Restrepo
    Brayan Sanabria Ramirez-->

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Elysium-Home</title>
  <link rel="icon" type="image/x-icon" href="/Elysium/img/logo2.png" />
  <link rel="stylesheet" href="/Elysium/style/style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" />
</head>

<body>
  <header>
    <?php
    require_once("header.php")
      ?>
  </header>

  <main>
    <div class="container">
      <img class="imgPrincipal" src="/Elysium/img/pjs1.jpg" alt="">
      <div class="contenido">
        <h1 class="Principal">Elysium Glamping</h1>
        <p class="ParrPrincipal">Sumérgete en la belleza natural mientras disfrutas de la comodidad y la sofisticación
          de nuestro exclusivo hotel glamping. Un lugar donde el encanto se une a la opulencia para crear una
          experiencia inolvidable. ¡Te invitamos a vivir el verdadero lujo!</p>
      </div>
    </div>
    <br>

    <div class="container2">
      <h2>Bienvenidos a Elysium!</h2>
      <p>Maravíllense con nuestras vistas sin igual. Descubran un paraíso excepcional en nuestro exclusivo hotel
        glamping, donde cada momento se convierte en una experiencia inolvidable. Relájense y disfruten de un servicio
        impecable y comodidades de primer nivel.</p>
    </div><br>

    <div class="experiencias">
      <h2>Experiencias</h2><br>
      <div class="experiencia">
        <img src="/Elysium/img/plazoleta.jpg" alt="Experiencia 1">
        <p>Descubre la magia de Guatapé <br> mientras recorres este encantador pueblo.<br> Sorpresas inolvidables
          esperan
          <br>en cada rincón de este territorio único.
        </p>
      </div>
      <div class="experiencia">
        <img src="/Elysium/img/jeatSki.png"" alt=" Experiencia 2">
        <p>Disfruta del emocionante alquiler<br> de jet ski y lanchas en nuestro hotel glamping,<br> mientras admiras
          las impresionantes vistas<br> del lago de Guatapé.</p>
      </div>
      <div class="experiencia">
        <img src="/Elysium/img/piedra.png"" alt=" Experiencia 3">
        <p>Sube los 740 escalones de la piedra<br> para disfrutar de una de las mejores vistas del mundo <br>subir no
          será fácil pero valdrá 100% la pena</p>
      </div>
    </div><br><br>
  </main>
  <footer>
      <?php
        require_once("footer.php")
        ?>
    </footer>
</body>

</html>