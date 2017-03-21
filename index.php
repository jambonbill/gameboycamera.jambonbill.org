<?php
$files=glob('gif/*.gif');
shuffle($files);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!--
	GameboyCamera by Jambonbill
	http://gameboycamera.jambonbill.org
	-->
	<meta charset="utf-8">
	<meta name="description" content="Jambonbill Game boy Camera">
	<meta name="keywords" content="GIF, gameboy, camera, pixel, 8bit, nintendo, jambonbill, sidabitball">
	<meta name="author" content="Jambonbill">

	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/gbc.css">
	<link rel="shortcut icon" href="img/favicon.ico">
	<link rel="apple-touch-icon" sizes="57x57" href="img/icon57px.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="img/icon72px.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="img/icon114px.png" />
	<link rel="apple-touch-icon" sizes="144x144" href="img/icon144px.png" />
	<link rel="apple-touch-icon" sizes="180x180" href="img/icon180px.png" />

	<meta property="og:title" content="Jambonbill Gameboy Camera GIF" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="http://gameboycamera.jambonbill.org/" />
	<meta property="og:image" content="<?php echo $files[0]?>" />
	<meta property="og:site_name" content="Gameboy Camera" />
	<meta property="og:description" content="random Gameboy Camera animation" />
	<title>Jambonbill Gameboy Camera GIF</title>
</head>


</head>
<body>
<div class='container' style="max-width: 720px;">
<?php
echo "<a href='http://gameboycamera.jambonbill.org'><img src='".$files[0]."' title='".basename($files[0])."' width=160 height=144></a>";
?>
</body>
<script src=js/gbc.js></script>
</html>