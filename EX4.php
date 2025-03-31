<?php 
$n1 =9;
$n2 =7;
$n3 =2;

if ($n1>$n2 && $n1>$n3){
	if($n2>$n3){
	Echo ("Os numeros em ordem é: " . $n1 ." ". $n2 ." ". $n3);
}else{
	Echo ("Os numeros em ordem é: " . $n1 ." ". $n3 ." ". $n2);
}
}
if ($n2>$n1 && $n2>$n3){
	if($n1>$n3){
	Echo ("Os numeros em ordem é: " . $n2 ." ". $n1 ." ". $n3);
}else{
	Echo ("Os numeros em ordem é: " . $n2 ." ". $n3 ." ". $n1);
}
}
if ($n3>$n1 && $n3>$n2){
	if($n2>$n1){
	Echo ("Os numeros em ordem é: " . $n3 ." ". $n2 ." ". $n1);
}else{
	Echo ("Os numeros em ordem é: " . $n3 ." ". $n1 ." ". $n2);
}
}
?>