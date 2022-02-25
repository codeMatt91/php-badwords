<?php

/* 
Descrizione:
Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.
*/



$title = 'La mia prima applicazione PHP';
$paragraph = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos minus deleniti enim possimus ipsam animi. Debitis neque quae animi fuga ipsa eligendi eveniet fugit, sit accusamus accusantium veniam asperiores! Adipisci? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos minus deleniti enim possimus ipsam animi. Debitis neque quae animi fuga ipsa eligendi eveniet fugit, sit accusamus accusantium veniam asperiores! Adipisci?';

$name = $_GET['name'];
$last_name = $_GET['lastname'];

$censured = $_GET['censured'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <title>Document</title>
</head>

<body>
   <div class="d-flex flex-column text-center">
      <h1><?php echo $title ?></h1>
      <p><?php echo $paragraph ?></p>
      <p>il mio titolo e lungo <?php echo strlen($paragraph) ?> lettere</p>

      <div>Questo lavoro e stato realizzato da <?php echo $name . $last_name ?></div>

      <div><?php echo str_replace('ipsa', $censured, $paragraph) ?></div>

      <div class="my-5">

         <form action="index.php" method="get">
            <label for="word">inserisci la parola con cui vuoi censurare</label>
            <input id="word" type="text" name="censured">
            <button type="submit">INVIA</button>
         </form>
      </div>

   </div>
</body>

</html>              