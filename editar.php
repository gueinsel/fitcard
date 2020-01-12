<?php
$updateRetalhos="";
$contador = 0;
foreach($_POST as $key => $value) {
    if($key == 'id'){
        $updateRetalhos .= "";
    }
    elseif($contador == 0){
        $updateRetalhos .= $key."='".$value."',";

    }
    elseif($contador == count($_POST) - 1){
    $updateRetalhos .= $key."='".$value."'";

    }else{
  $updateRetalhos .= $key."='".$value."',";
  
    }
   $contador++;
}
    $atualizarSQL="UPDATE empresas SET ".$updateRetalhos." WHERE ID='".$_POST['id']."'";
    include "conectar.php";
    mysqli_query($conectar,$atualizarSQL);
    header('Location: ../fitcard/');
?>