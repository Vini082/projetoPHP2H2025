<?php 
	print ("Usando print para exibir na tela </br>");
	$data = "17 de maio de 2025";
	$salario = 1509.00;
	$cargo = "Estagiario";

	echo ("Arquivo criado em $data <br/>");

	printf("Salario minimo: R$ %.2f por mês.<br/>", $salario);

	$texto = sprintf("%s recebe R$ %.2f por mês",$cargo,$salario*2);

	echo ($texto);



 ?>