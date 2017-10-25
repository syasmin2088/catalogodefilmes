<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 
include 'conection.php';

class database{

public function Inserir(){ 

$sql = "INSERT INTO ator(nome, data_nascimento)Values(:nome,:data_nascimento)";

$nome = 'Tom Hardy';
$datanasci = '19770915';


$con = conection::getInstance();
$stmt = $con -> prepare($sql);
$stmt->bindParam( ':nome', $nome );
$stmt->bindParam( ':data_nascimento', $datanasci );

 $result = $stmt ->execute();

if (! $result )
{
    var_dump( $stmt->errorInfo() );
    exit;
}
}

public function Deletar () {
       
}


public function Editar(){
    
}


 
public function Listar(){
    
} 
 
 
 public function Pesquisar(){
     
 }

}