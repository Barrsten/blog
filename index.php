<!DOCTYPE html>
<html>
<head>
	<title></title>
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
<?php include 'db.php'; ?>
	<?php for($i = 0; $i < count($database); $i++){ ?>
	
		<div>
			<?php  
			echo '<h2>' . $database[$i]['header'] . '</h2>';
			echo '<p>' . $database[$i]['short_text'] . '</p>';
			echo '<img src="' . $database[$i]['image'] . '"/><br>';
			echo '<a href="page.php?index=' . $i . '"><button class="btn btn-primary">Далее</button></a><br>';
			echo '<span>Автор: </span><a href="user.php?index=' . $i . '">'. $database[$i]['user'] . '</a>';
			?>
		</div>
		<hr>
	<?php } ?>
	


</body>
</html>