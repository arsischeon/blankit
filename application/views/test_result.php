<?php
//echo print_r($info);
echo $deleteCart. "///";

$xxDeleteCart = explode(',', $deleteCart);

$xxDeleteSize = sizeOf($xxDeleteCart);

for($x=1; x<$xxDeleteSize; $x++){
	echo $xxDeleteCart[$x];
	echo \n;
}


?>