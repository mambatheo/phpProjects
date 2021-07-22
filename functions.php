<?php
$a=$_POST["a"];
$b=$_POST["b"];
function functionName($x,$y){
	$sum=$x+$y;
	return $sum;

}
function functionSubtract($x,$y){
	$qoutient=$x-$y;
	return $qoutient;
}
function functionModulus($x,$y){
	$modulus=$x%$y;
	return $modulus;
}
function functionProduct($x,$y){
	$product=$x*$y;
	return $product;
}
function functionDivision($x,$y){
	if($y!=0){
			$division=$x/$y;
	}

	else{
		echo "Error";
	}
}

/*echo functionName($a,$b);echo "<br>";
 echo functionSubtract($a,$b);echo "<br>";
 echo  functionModulus($a,$b);echo "<br>";
echo functionProduct($a,$b);echo "<br>";*/
echo functionDivision($a,$b);


?>