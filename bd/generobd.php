<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of generobd
 *
 * @author syasmin20
 */

include 'conection.php';

class generobd {
    //put your code here
    
    public function Listar(){ //Inserir ator na tabela

$sql = "SELECT genero FROM genero";

//$nome = filter_input(INPUT_POST,'nome',FILTER_SANITIZE_SPECIAL_CHARS);


$con = conection::getInstance();
$stmt = $con->prepare($sql);
$stmt->execute();
$generos = $stmt->fetchall();

foreach($generos as $item)
{
   echo $item["genero"];
}
    
    }
   

}
