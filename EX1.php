<?php
// EXERCICIO 1
	$n1 = 10;
	$n2 = 10;
	$soma = 0;
	$total = 0;

	$soma = $n1 + $n2;

	if($soma>20)
	{$total = $soma + 8;
		echo ("A soma + 8 é:" . $total);
	}else if($soma<=20)
	{$total = $soma - 5;
		echo ("A soma - 5 é:" . $total);
	}
?>