<?php
// SAVE TO PNG FILE CREDITS
// https://netcell.netlify.com/blog/2016/04/image-base64.html
$file = fopen("screenshot.png", "w");
$data = explode(",", $_POST['screenshot']);
$data = base64_decode($data[1]);
fwrite($file, $data);
fclose($file);
echo "OK";