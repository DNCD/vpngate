<?php
$file= "vpn.csv";
//$file="mysqlTable.csv";
$csv= file_get_contents($file);
$array = array_map("str_getcsv", explode("\n", $csv));
print json_encode($array);
?>
