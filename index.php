<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Philippe PERECHODOV">
  <title>Calcul en PHP</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="main.css">
  <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">

</head>

<body>

  <h2> Bonjour, nous allons réviser les tables de multiplication !</h2>
  <br>

  <form class="" action="index.php" method="post">
     <label for="chiffre">Choisir un chiffre entier entre 0 et 10 :</label>
     <input type="text" id="chiffre" placeholder="0, 1, 2, ... , 10" name="chiffre">
     <button type="submit">Cliquez ici ou appuyez sur la touche "Entrer"</button>
  </form>

  <br>

  <?php

    $multiplicateur = 0;
    $chiffre_choisi = $_POST["chiffre"];

    if (empty ($_POST["chiffre"])) {
      echo "A vous de jouer !";
    }
    else {

      if (is_numeric ($chiffre_choisi)) {

        if (ctype_digit ($chiffre_choisi)) {

          if ($chiffre_choisi > 10) {
            echo "Le chiffre choisi est supérieur à 10.";
          }

          else {
            echo "Voici la table de multiplication de " . $chiffre_choisi . " :" . "<br>" . "<br>";

            while ($multiplicateur <= 10) {
              echo $chiffre_choisi . " x " . $multiplicateur . " = " . $chiffre_choisi*$multiplicateur . "<br>";
              $multiplicateur = $multiplicateur+1;
            }
            echo "<br>";
            echo "Facile, non ?";

          }

        }
        else {
          echo "Il faut écrire un chiffre entier donc sans virgule et supérieur à 0.";
        }

      }
      else {
        echo "Il faut écrire un chiffre et non une lettre ou un symbole.";
      }
    }

?>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>
