<?php 
    $deletar = $_GET['id'];
    include "conectar.php";
    $excluirSQL = "DELETE FROM empresas WHERE ID=$deletar";
    mysqli_query($conectar,$excluirSQL);
    header('Location: ../fitcard/');
?>