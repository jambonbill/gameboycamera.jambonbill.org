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
	<link rel="stylesheet" href="css/gameboycamera.css">

	<link rel="shortcut icon" href="favicon.ico">
	<title>Jambonbill Gameboy Camera GIF</title>
	<meta property="og:title" content="Jambonbill Gameboy Camera GIF" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="http://gameboycamera.jambonbill.org/" />
	<meta property="og:image" content="<?php echo $files[0]?>" />
	<meta property="og:site_name" content="Gameboy Camera" />
	<meta property="og:description" content="Jambonbill Gameboy Camera" />
</head>

<body>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<style>
body{background-color:black;}
img{
	width:100%;
	height: auto;
	image-rendering:optimizeSpeed;             /* Legal fallback */
	image-rendering:-moz-crisp-edges;          /* Firefox        */
	image-rendering:-o-crisp-edges;            /* Opera          */
	image-rendering:-webkit-optimize-contrast; /* Safari         */
	image-rendering:optimize-contrast;         /* CSS3 Proposed  */
	image-rendering:crisp-edges;               /* CSS4 Proposed  */
	image-rendering:pixelated;                 /* CSS4 Proposed  */
	-ms-interpolation-mode:nearest-neighbor;   /* IE8+           */
}
</style>
</head>
<body>
<div class='container' style="max-width: 720px;">
<?php
echo "<a href='http://gameboycamera.jambonbill.org'><img src='".$files[0]."' title='".basename($files[0])."' width=160 height=144></a>";
?>
</body>
<script>setTimeout(function(){document.location.reload()},10000);</script>
</html>