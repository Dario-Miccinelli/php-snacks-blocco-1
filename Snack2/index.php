<!-- Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, 
che mail contenga un punto e una chiocciola e che age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php
$nome = NULL;
$email = NULL;
$eta = NULL;

  if (isSet($_GET['nome'])) {
    $nome = $_GET['nome'];
  }
  if (isSet($_GET['email'])) {
    $email = $_GET['email'];
  }
  if (isSet($_GET['eta'])) {
    $eta = $_GET['eta'];
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form method="get">
    <input type="text" placeholder="Inserisci il tuo nome" name="nome">
    <input type="text" placeholder="Inserisci il tua email" name="email">
    <input type="number" placeholder="Inserisci il tua età" name="eta">
    <button type="submit">Invia</button>
  </form>

  <?php


  if (strlen($nome) > 3 && strpos($email, '.') !== false && strpos($email, '@') !== false && is_numeric($eta)) {
    echo ('Accesso riuscito');
  } else {
    echo ('Accesso negato');
  }
  ?>
</body>

</html>