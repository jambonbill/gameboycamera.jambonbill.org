<!DOCTYPE html>
<html lang="en">
<head>
	<!--
		GameboyCamera by Jambonbill
		http://gameboycamera.jambonbill.org
	-->
	<meta charset="utf-8">
	<meta name="description" content="Game boy camera">
	<meta name="keywords" content="gameboy, camera, pixel, 8bit, nintendo, jambonbill">
	<meta name="author" content="Jambonbill">
	<link rel="stylesheet" href="css/gameboycamera.css">

	<link rel="shortcut icon" href="favicon.ico">
	<title>Gameboy Camera</title>
	<meta property="og:title" content="Gameboy Camera" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="http://gameboycamera.jambonbill.org/" />
	<meta property="og:image" content="./gif/1358108056298.gif" />
	<meta property="og:site_name" content="Gameboy Camera" />
	<meta property="og:description" content="Jambonbill Gameboy Camera" />
</head>

<body>
<?php
$files=glob('gif/*.gif');
shuffle($files);
//echo $files[0];

echo "<a href='http://gameboycamera.jambonbill.org'><img src='".$files[0]."' title='".basename($files[0])."' width=320 height=288></a>";
?>
</body>
</html>