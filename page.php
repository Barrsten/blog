<!DOCTYPE html>
<html>
<head>
	<title>Статья</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre.min.css">
	<link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre-exp.min.css">
	<link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre-icons.min.css">
	<style type="text/css">
		img{
			height: 400px;
		}
	</style>
</head>
<body>

	<?php 
	include 'db.php';

	echo '<h2>' . $database[$_GET['index']]['header'] . '</h2>';
	echo '<p>' . $database[$_GET['index']]['text'] . '</p>';
	echo '<img src="' . $database[$_GET['index']]['image'] . '"
	?>
</body>
</html>