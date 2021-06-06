<?php
echo "//insertion sort<br>";
$data=array(9,5,6,7,8,2,1,3,4);
print_r($data); 
echo "<br>";
  $n=count($data);
  echo "jumlah data :".$n."<br>";
  $start_time = microtime(true);

  for ($i = 1;$i<$n;$i++){
    echo "<br>";
    echo "perulangan : ".$i."<br>";  
    for ($k = $i; $k>0; $k--) {
          if ($data[$k] < $data[$k-1])
          { 
              echo "data ke: ".$k. " : ".$data[$k]." < "."data ke: ".($k-1). " : ".$data[$j-1]." = tukar";
              $dummy=$data[$k];
              $data[$k]=$data[$k-1];
              $data[$k-1]=$dummy;
              echo "<br>";          
            }
            else
            {
              echo "data ke: ".$k. " : ".$data[$k]." < "."data ke: ".($k-1). " : ".$data[$j-1]." = tidak tukar"; 
            }
      } 
      print_r($data);
      echo "<br>";
    }   
    
   // End clock time in seconds
   $end_time = microtime(true);
   // Calculate script execution time
   $execution_time = ($end_time - $start_time);
     
   echo " Execution time of script = ".$execution_time." sec";

?>
