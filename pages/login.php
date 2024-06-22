<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>login </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <center>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <form action="../autenticar.php" method="POST">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br><br>
        
        <label for="senha">Senha:</label>
        <input type="password"  id="senha" name="senha"><br><br>
      <button type="submit">Login</button>
    </form>
  </center>
  </body>
</html>