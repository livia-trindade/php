<?php
$aluno = array( "nome" => "Livia Trindade", 
"idade" => 17, 
"end" => "Rua abc", 
"cidade"=> "Guanambi",
"estado"=> "Bahia", 
"cpf"=> "000.000.000-00");

echo "<p> Aluno 01 </p>" ;
echo $aluno["nome"] ."<br>";
echo $aluno["idade"] ."<br>";
echo $aluno["end"] . "<br>";
echo $aluno["cidade"] . "<br>";
echo $aluno["estado"] . "<br>";
echo $aluno["cpf"] . "<br>";

echo "<br>";

$aluno1 = array( "nome" => "Luna Porto", 
"idade" => 17, 
"end" => "Rua 123", 
"cidade"=> "Cacule",
"estado"=> "Bahia", 
"cpf"=> "000.000.000-01");

echo "<p> Aluno 2 </p>" ;

echo $aluno1["nome"] ."<br>";
echo $aluno1["idade"] ."<br>";
echo $aluno1["end"] . "<br>";
echo $aluno1["cidade"] . "<br>";
echo $aluno1["estado"] . "<br>";
echo $aluno1["cpf"] . "<br>";

echo "<br>";


$aluno2 = array( "nome" => "Pedro Xavier", 
"idade" => 17, 
"end" => "Rua ab", 
"cidade"=> "Cacule",
"estado"=> "Bahia", 
"cpf"=> "000.000.000-02");

echo "<p> Aluno 3 </p>" ;

echo $aluno2["nome"] ."<br>";
echo $aluno2["idade"] ."<br>";
echo $aluno2["end"] . "<br>";
echo $aluno2["cidade"] . "<br>";
echo $aluno2["estado"] . "<br>";
echo $aluno2["cpf"] . "<br>";

echo "<br>";


$professor = array( "nome" => "Fabio", 
"idade" => 40, 
"end" => "Rua aaa", 
"cidade"=> "Guanambi",
"estado"=> "Bahia", 
"cpf"=> "000.000.000-00");

echo "<p> Professor </p>" ;

echo $professor["nome"] ."<br>";
echo $professor["idade"] ."<br>";
echo $professor["end"] . "<br>";
echo $professor["cidade"] . "<br>";
echo $professor["estado"] . "<br>";
echo $professor["cpf"] . "<br>";

?>