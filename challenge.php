<?php
$n=678585;
$sum=0;
	$rem;
while($n!=0){
$rem=$n%10;
$sum=$sum+$rem;
$n=$n/10;
}
echo $sum;
?>