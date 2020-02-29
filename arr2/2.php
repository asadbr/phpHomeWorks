
<?php
function getname($a)
{
  $n=count($a);
  for ($x=0; $x<$n; $x++) {
      echo "{$a[$x][0]} ";
      echo "{$a[$x][1][0]}.";
      echo "{$a[$x][2][0]}<br>";
  }

}
  $b=[
      ['Barotov','Asad', 'Bahromovich'],
      ['Mahmudov', 'Jovid', 'Sharipovich'],
      ['Karimov','Bezan', 'Karimovich']
     ];
getname($b);
?>