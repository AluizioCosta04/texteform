<?php


include("./conexao.php");

$consulta = "SELECT NOME_COMP, IDADE, PROFISSAO FROM testeform.tb_pessoa";
$result = $conn->query($consulta);

if ($result->num_rows > 0) 
    // output data of each row
    while($row = $result->fetch_assoc()) 
    {
    echo " <b>Nome Completo: </b> ". $row ["NOME_COMP"]."<br>";
    echo " <b>Idade: </b> ".$row ["IDADE"]."<br>";
    echo " <b>Profissão: </b> ".$row ["PROFISSAO"]."<br>";
    }







?>