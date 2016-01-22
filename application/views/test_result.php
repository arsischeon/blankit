<?php
//echo print_r($info);
echo $deleteCart. "///";

$xxDeleteCart = explode(',', $deleteCart);
$xxDeleteSize = sizeOf($xxDeleteCart);
$x=1;
 
while($x < $xxDeleteSize){
	echo $xxDeleteCart[$x];
	$x++;
}

?>