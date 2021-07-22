<?php
$a=$_POST[marks];
switch ($a){
	case 1: $a<50;
		echo "You fail";
		break;
	case 2: $a>=50;
		echo "you pass";
		break;
	default:
		echo "enter your marks";
		break;
	}
?>