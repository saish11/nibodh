<?php
$num1=34;
$num2=45;
$result;
$choice=3;
echo "1-Addition";
echo "<br>";
echo "2-Subtraction";
echo "<br>";
echo "3-Multiplaction";
echo "<br>";
echo "4-Division";
echo "<br>";
Switch ($choice){
case 1:
	$result=$num1+$num2;
	echo "$result";
	break;
	case 2:
	$result=$num1-$num2;
	echo "$result";
	break;
	case 3:
	$result=$num1*$num2;
	echo "$result";
	break;
	case 4:
	$result=$num1/$num2;
	echo "$result";
	default:
	echo "Invalid Input";
	break;
}
?>