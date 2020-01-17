<?php
$title = 'Document';
$textH1 = 'Hello Word!';
$date = 'Текущий год: ' . date(Y);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php echo $title ?></title>
</head>
<body>

<h1><?php echo $textH1 ?></h1>
<h2><?php echo $date ?></h2>

</body>
</html>




