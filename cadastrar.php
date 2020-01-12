<?php
$cadastrarRetalhos="";
$cadastroColunas ="";
$contador = 0;
foreach($_POST as $key => $value) {
    if($contador == 0){
        $cadastroColunas .= "".$key.",";
$cadastrarRetalhos .= "'".$value."',";
    }
    elseif($contador == count($_POST) - 1){
$cadastrarRetalhos .= "'".$value."'";
$cadastroColunas .= "".$key."";
    }else{
 $cadastrarRetalhos .= "'".$value."',"; 
  $cadastroColunas .= "".$key.","; 
    }
   $contador++;
}
$cadastrarSQL="INSERT INTO empresas (".$cadastroColunas.") VALUES (".$cadastrarRetalhos.")";
    include "conectar.php";
    mysqli_query($conectar,$cadastrarSQL);
    header('Location: ../fitcard/');
?>