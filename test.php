<?php
require 'base.php';

// function formatBytes($size, $precision = 2)
// {
//     $base = log($size, 1024);
//     $suffixes = array('', 'K', 'Mbps', 'G', 'T');   

//     return round(pow(1024, $base - floor($base)), $precision) .' '. $suffixes[floor($base)];
// }

// echo formatBytes(24962496);
// // 23.81M

//echo formatBytes(24962496, 0);
// 24M

//echo formatBytes(24962496, 4);
// 23.8061M
//print_r ($data);

foreach ($data as $key => $value) {
	# code...
	echo $value['1'];
	echo "<br>";
}
?>