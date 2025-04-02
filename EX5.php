<?php 

$maioraltura=0;
$menoraltura=0;
$somaalturamulheres=0;
$mediaalturamulher=0;
$qtdmulher=2;
$idadehomemvelho=0;
$idademulhernova=0;

$p1_altura=1.80;
$p1_idade=25;
$p1_sexo="F";
$p2_altura=1.60;
$p2_idade=20;
$p2_sexo="F";
$cont=0;

//qual a maior e menor altura

if($p1_altura>$p2_altura){
$maioraltura=$p1_altura;
}else{
$maioraltura=$p2_altura;
}

if($p1_altura<$p2_altura){
$menoraltura=$p1_altura;
}else{
$menoraltura=$p2_altura;
}

echo("A maior altura é: " . $maioraltura . "</br>");
echo("A menor altura é: " . $menoraltura . "</br>");

//média altura mulheres 
while($qtdmulher != $cont){
if($p1_sexo=="F"){
$somaalturamulheres = $somaalturamulheres + $p1_altura;
$p1_sexo="";
$cont++;
}else if($p2_sexo=="F"){
$somaalturamulheres = $somaalturamulheres + $p2_altura;
$p2_sexo="";
$cont++;
}
}

$mediaalturamulher = $somaalturamulheres/$cont;
echo("A média da altura das mulheres é : " . $mediaalturamulher);


//quem é o mais velho e o mais novo



// for($i=0;$i<5;$i++){
// echo("Altura é:".  <br>");
// echo("Idade é: <br>");
// echo("O sexo é: <br>");


// }





 ?>