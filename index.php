<?php

$files=glob('gif/*.gif');
shuffle($files);
//echo $files[0];

echo "<img src='".$files[0]."' title='".basename($files[0])."'>";

