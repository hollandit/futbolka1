<!DOCTYPE html>
<html>
<head>
	<title>Спасибо за заказ</title>
	<link rel="icon" href="image/favicon.ico">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/thank.css">
	<link rel="stylesheet" type="text/css" href="css/modal.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="css/media.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/inputmask.js"></script>
	<script>
		$(function($){
			$("#phoneInput").mask("7(999)999-99-99");
		});
	</script>
</head>
<body>
	<?php require_once("header.php"); ?>
	<div style="margin-bottom: 20%; font-family: Boldtext;">
		<div style="margin-top: 20%; text-align: center;">
			<h1 style="font-size: 80px;">Спасибо за заказ!</h1>
		</div>
		<div style="text-align: center;">
			<a href="index.html"><h2>Перейти на главную страницу</h2></a>
		</div>
	</div>
	<div>
		<footer class="logos"></footer>
	</div>
</body>
</html>