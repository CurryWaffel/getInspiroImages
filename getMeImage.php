<?php

header('Content-Type: application/octet-stream');
header("Content-Transfer-Encoding: Binary");
header("Content-disposition: attachment; filename=" . $_GET['number'] . ".jpg");
readfile(file_get_contents('https://inspirobot.me/api?generate=true'));

exit(0);
