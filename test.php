<?php
$max = isset($argv[2]) ? intval($argv[2]) : 2147483647;
for ($i = 0; $i < intval($argv[1]); $i++) {
    echo rand(0, $max) . ' ';
}
echo PHP_EOL;