


<?php
$array=array("expertphp","demo","expertphp","tealorca","spackylo","tealorca");
$count_array = array_count_values($array);
echo "<pre>"; 
print_r($count_array);
$results = array();
foreach($count_array as $key=>$val){
   if($val > 1){
    $results[$key] = 'duplicate';
   }
   else{
    $results[$key] = 'unique';
   }
}
echo "<pre>";
print_r($results);
?>