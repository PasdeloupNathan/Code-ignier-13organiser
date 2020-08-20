<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<title>Liste</title>
</head>
<body>
<h1>Liste</h1>
<?php foreach ($naruto as $row): ?>
<p> <?= $row->id ?> </p>
<p> <?= $row->username ?> </p>
<p> <?= $row->password ?> </p>
<?php endforeach; ?>
</body>
</html>
</body>
</html>