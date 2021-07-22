<?php
function findMin(){
$myArray=array(45,6,100,0,900,1,6,96);
$min=$myArray[0];
for($i=0;$i<sizeOf($myArray);$i++){
if($myArray[$i]<$min){
$min=$myArray[$i];
}
}
return $min;

}
echo findMin();
?>