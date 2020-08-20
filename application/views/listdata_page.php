<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Aller l'OM</title>

	<style type="text/css">

body{
	text-align:center;
}
ul {
    list-style-type: none;
}
	</style>
</head>
<body>

<h3>Test</h3>

<ul>

<?php foreach($dat as $dat_val):?>

<li><?php echo $dat_val;?></li>

<?php endforeach;?>
</ul>




</body>
</html>