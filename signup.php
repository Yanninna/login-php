<?php

  require 'database.php';

  $message = '';

  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $_POST['email']);
    /*esto logra que en la base salga encriptada la clave del usuario*/
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);

    if ($stmt->execute()) {
      $message = 'Felicidades te registraste con exito';
    } else {
      $message = 'Algo salio mal por favor vuelve a intentrlo';
    }
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>SignUp</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>

    <?php require 'partials/header.php' ?>

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <h1>Registrate</h1><br>
    <span>o <a href="login.php">Ingresa Tu Clave</a></span><br>

    <form action="signup.php" method="POST">
      <input name="email" type="text" placeholder="ingresa tu email">
      <input name="password" type="password" placeholder="ingresa tu clave">
      <input name="confirm_password" type="password" placeholder="Confirma tu clave">
      <input type="submit" value="Submit">
    </form>

  </body>
</html>