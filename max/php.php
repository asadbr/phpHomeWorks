<?php
function myMax ($a){
	$n=count($a);
	if($n>0) {
		$max=$a[0];
		for($i=0; $i<$n; $i++)
		{
			if($max<$a[$i]) $max=$a[$i];
		}
      echo $max;
	}
}
$test=[1,2,3,43,5,4];

myMax($test);
?>