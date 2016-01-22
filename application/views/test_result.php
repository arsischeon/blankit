<?php
//echo print_r($info);
echo $deleteCart. "///";

$xxDeleteCart = explode(',', $deleteCart);

$xxDeleteSize = sizeOf($xxDeleteCart);
echo $xxDeleteSize;
$x=1;

while($x < $xxDeleteSize){
	echo $xxDeleteCart[$x];
	$x++;
}

/* for($x=1; x<$xxDeleteSize; $x++){
	echo $xxDeleteCart[$x];
} */
 

?>