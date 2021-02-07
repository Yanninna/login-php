<?php
  session_start();

  require 'database.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel = "preconnect" href = "https://fonts.gstatic.com"> 
    <link href = "https://fonts.googleapis.com/css2? family =
                 Roboto: wght @ 300 & display = swap" rel = "hoja de estilo">
    <title>Bien Venido a Licencias de Conducir</title>
</head>
<body>
<center>
    <h1>Licencias de Conducir</h1>
    <div class="img1">
      <ul>
       <video src="imagenfinal/videolicen.mp4" mime_content_type="video/mp4"></video>
         </ul>
    </div>
    <?php require 'partials/header.php'?>

     <?php if(!empty($user)): ?>
      <br> Welcome. <?= $user['email']; ?>
      <br>felicidades te registraste con exito
      <a href="logout.php">
        Logout
      </a>
    <?php else: ?>

    <h2>Por Favor Registrate o Ingresa Tu contraseña</h2><br>

    <a href="login.php">Ingresa Tu Contraseña</a><br> o<br>

    <a href="signup.php">Registrate</a><br><br>
    
    <a href="galeria.php">Galeria</a><br>
    <?php endif; ?>
   
</body>
</html>