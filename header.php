<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" type="image/ico" href="Material/favicon.ico" />
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>UnPocoDeIdiomas</title>
<link href="EstiloIndex.css" rel="stylesheet" type="text/css">
<!-- Bootstrap -->
<link rel="stylesheet" href="css/bootstrap.css">


</head>
<body bgcolor="white">
<!-- HEADER -->
<header>
<nav>
  <div class="main-wrapper">
    <ul>
      <li><a href="index.php">Inicio</a></li>
    </ul>
    <div class="nav-login"> 
      <?php
          if (isset($_SESSION['u_id'])) {
            echo '<form action="includes/logout.inc.php" method="POST">
              <button type="submit" name="submit">Salir</button>
            </form>';
          } else {
            echo '<form action="includes/login.inc.php" method="POST">
              <input type="text" name="uid" placeholder="Username/e-mail">
              <input type="password" name="pwd" placeholder="password">
              <button type="submit" name="submit">Entrar</button>
            </form>
            <a href="registrar.php">Sign up</a>';
          }
        ?>
    </div>
  </div>

</nav>

<!-- / HEADER --> 