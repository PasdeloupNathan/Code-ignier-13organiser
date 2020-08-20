<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<title>Aller l'OM</title>



	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #222222;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #0e96d2;
	}

	a {
		color: #0e96d2;

		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #0e96d2;

		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {

		background-color: #ffffff;

		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>


<div id="container">
	<h1>Aller l'OM</h1>

	<div id="body">
		<p>Prono Demi LDC</p>

		<p>Psg - Leizpig</p>
		<code>2 - 1 pour Leizpig</code>

		<p>Lyon - Bayern</p>
		<code>3 - 0 pour Bayern</code>

		<p>Meilleur equipe de france > <a href="https://www.om.fr/fr">ICI</a>.</p>
		<br>
		<a href="<?= site_url("eleve/index"); ?>">eleves</a>
		

	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>

