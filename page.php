<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Calcul de moyenne</title>
</head>
<body>
  <h1>Calcul de la moyenne d’un élève</h1>

  <form method="post">
    <label>Nom de l’élève :</label><br>
    <input type="text" name="nom" required><br><br>

    <label>Note en math :</label><br>
    <input type="number" name="math" required><br><br>

    <label>Note en français :</label><br>
    <input type="number" name="francais" required><br><br>

    <button type="submit" name="submitCalcMoy">Calculer la moyenne</button>
  </form>

  <?php
    if (isset($_POST["submitCalcMoy"])) {
      $nom = $_POST['nom'];
      $math = intval($_POST['math']);
      $francais = intval($_POST['francais']);

      $moy = ($math + $francais) / 2;

      echo "<h1>Résultat :</h1>";
      echo "<p>Nom : $nom</p>";
      echo "<p>Moyenne : $moy / 20</p>";

      if ($moy >= 16) {
        echo "<p>Appréciation : Excellent </p>";
      } elseif ($moy >= 12) {
        echo "<p>Appréciation : Bien </p>";
      } elseif ($moy >= 10) {
        echo "<p>Appréciation : Passable</p>";
      } else {
        echo "<p>Appréciation : Insuffisant </p>";
      }
    }
  ?>

</body>
</html>
