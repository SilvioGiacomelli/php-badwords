<?php
$censurata = $_POST["censurata"];
$paragrafo = $_POST["paragrafo"];

$sostituto = str_replace($censurata, '***', $paragrafo);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Atterraggio</title>
</head>

<p>Parola che dovrà essere censura: <?php echo $censurata ?></p>
<p>Paragrafo senza censura: <?php echo $paragrafo ?></p>
<p>Parola che dovrà essere censura: <?php echo $sostituto ?></p>

<body>

</body>

</html>