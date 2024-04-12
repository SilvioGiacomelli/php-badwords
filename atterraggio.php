<?php
$censurata = $_POST['censurata'];
$paragrafo = $_POST['paragrafo'];

$sostituto = str_ireplace($censurata, '***', $paragrafo);
echo $sostituto;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Atterraggio</title>
</head>

<body>

</body>

</html>