<?php
echo "Insertion Sort";
echo "<br>";
$data=array(50,40,7,10,9,3,4);
function insertion_sort($data){
  $n=count($data);
  for ($i = 1;$i<$n;$i++){ for ($k = $i; $k>0; $k--) {
      if($data[$k]<$data[$k-1]){
        $dummy=$data[$k];
        $data[$k]=$data[$k-1];
        $data[$k-1]=$dummy;
      }
    }
  }
  return $data;
}
echo "Random Data = ";
echo implode ($data);
echo "<br>";
echo "Sequence Data = ";
echo implode (insertion_sort($data));
?>