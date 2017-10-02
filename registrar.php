<?php
  include_once 'header.php'
?>


<section class="main-container">
    <div class="col-lg-12 page-header text-center">
      <h2>Registro</h2>
      <form class="registro-form" action="includes/registro.inc.php" method="POST">
        <input type="text" name="PrimerNombre" placeholder="Primer nombre">
        <input type="text" name="PrimerApellido" placeholder="Primer Apellido">
        <input type="text" name="Correo" placeholder="Correo">
        <input type="text" name="Uid" placeholder="Id de usuario">
        <input type="password" name="Contraseña" placeholder="Contraseña">
        <button type="Registrar" name="Registrar">Registrar</button>
      </form>
    </div>
  </div>
  
      
    <!-- / CONTAINER--> 
</section>
<!-- FOOTER -->

<?php

  include_once 'footer.php'

?>

<!-- / FOOTER --> 

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<!-- <script src="js/jquery.js"></script> -->
<script src="js/jquery-1.11.2.min.js" type="text/javascript"></script>

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.js"></script>
</body>
</html>
