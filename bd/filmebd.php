<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 
include 'conection.php';
include '../html/cadastrodefilme.html';


$sql = "INSERT INTO filme(titulo,desc_genero, diretor,data,desc_classifica,elenco)Values(:titulo,:desc_genero,:diretor,:data,:desc_classifica,:elenco )";

$titulo = filter_input(INPUT_POST,'titulo',FILTER_SANITIZE_SPECIAL_CHARS);
$genero = filter_input(INPUT_POST,'genero',FILTER_SANITIZE_SPECIAL_CHARS);
$diretor = filter_input(INPUT_POST,'diretor',FILTER_SANITIZE_SPECIAL_CHARS);
$data = filter_input(INPUT_POST,'data',FILTER_SANITIZE_SPECIAL_CHARS);
$classifica = filter_input(INPUT_POST,'classifica',FILTER_SANITIZE_SPECIAL_CHARS);
$ator = filter_input(INPUT_POST,'ator',FILTER_SANITIZE_SPECIAL_CHARS);


$con = conection::getInstance();
$stmt = $con -> prepare($sql);  
$stmt->bindParam( ':titulo', $titulo );
$stmt->bindParam( ':desc_genero', $genero);
$stmt->bindParam( ':diretor', $diretor);
$stmt->bindParam( ':data', $data);
$stmt->bindParam( ':desc_classifica', $classifica);
$stmt->bindParam( ':elenco', $ator);
 $result = $stmt ->execute();

if (! $result )
{
    var_dump( $stmt->errorInfo() );
    exit;
}



