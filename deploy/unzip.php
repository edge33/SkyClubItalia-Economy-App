<?php
ini_set('max_execution_time', 0);
$zip = new ZipArchive;
$dir = './';
if ($zip->open("$dir/economy.zip") === TRUE) {
    $zip->extractTo($dir);
    $zip->close();
    echo "ok\n";
} else {
    echo "failed\n";
}
?>
