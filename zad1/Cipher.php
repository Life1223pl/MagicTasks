<?php
$pattern = str_split($argv[1]);
$replacement = str_split($argv[2]);
$text = $argv[3];


echo str_replace($pattern,$replacement,$text);

