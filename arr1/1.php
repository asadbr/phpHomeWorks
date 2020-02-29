<?php

function getArr(){
  $s=0;
    $arr = [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];
    for($i = 0; $i < 20; $i++) {
        $arr[$i] = rand(-100, 100);
    }
    for($i = 0; $i < 20; $i++) {
        echo "{$arr[$i]}<br>";

        }

     for ($i=0; $i <20 ; $i++) {
      if ($arr[$i]>0) {
      $s=$s+$arr[$i];
     }
    }
echo "sum = ".$s;


}
getArr();
?>