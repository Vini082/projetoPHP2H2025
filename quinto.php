<?php 
	$nome = "Etecia";

	function exibir(){
		$nome = "Etec Irmã Agostina";
		echo "Variavel de escopo de função: $nome";
	}
	exibir();
	echo "<br/> Variavel de escopo de script: $nome";


 ?>