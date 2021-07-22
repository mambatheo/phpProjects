<?php

$numbers = array();
for ($i=0; $i<=10; $i++) {   
   if ($i % 2 == 0){
    $even[]=$i;
  } else {
    $odd[]=$i;
  }
}
echo  $even+"this nber is even";
echo $odd+"this nber is odd";
?>
