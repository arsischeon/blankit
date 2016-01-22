<?php
//echo print_r($info);
echo $deleteCart. "///";

$xxDeleteCart = explode(',', $deleteCart);

$xxDeleteSize = sizeOf($xxDeleteCart);
echo $xxDeleteSize;
$x=2;

while($x < $xxDeleteSize){
	echo $xxDeleteCart[$x];
	$x++;
} 

?>