<?php
echo "Bubble Sort";
echo "<br>"; 
$data=array(9,5,7,6,2,3,4,1);
function bubble_sort($data){
  $n=count($data);
  for ($i = 0;$i<$n;$i++){ for ($j = $n-1;$j>$i;$j--){
          if ($data[$j] < $data[$j-1]){ 
              $dummy=$data[$j];
              $data[$j]=$data[$j-1];
              $data[$j-1]=$dummy;
          }
      }    
  }
  return $data;
}
echo "Random Data = ";
echo implode ($data);
echo "<br>";
echo "Sequence Data = ";
echo implode (bubble_sort($data));
?>