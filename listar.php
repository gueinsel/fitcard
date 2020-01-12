<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./dist/css/style.css">
    <title>Cadastros Fitcard</title>
</head>

<body>
    <main>
        <?php include "header.php" ?>
        <article class="container">
            <div class="wrapper">
                <div class="row justify-content-between align-items-center">
                    <div class="col-6">
                        <h1>Clientes cadastrados</h1>
                    </div>

                    <a href="./cadastro" class="btn-fitcard">Cadastrar Novo</a>

                </div>
            </div>
            <?php 
            $queryLista="SELECT * FROM empresas INNER JOIN categorias ON empresas.catID=categorias.id";
            $listar = mysqli_query($conectar,$queryLista);
            if(mysqli_num_rows($listar) > 0){
           ?>
            <div class="wrapper">

                <div class="row">
                    <?php
                        while ($linhas = mysqli_fetch_assoc($listar)) {
                            ?>
                    <div class="tabelas col-lg-4">
                        <div class="table">

                            <div class="row_table header">

                            </div>

                            <div class="row_table">

                                <div class="cell" data-title="Ações">
                                    <a href="./edicao?id=<?= $linhas['ID'] ?>" class="link"><i
                                            class="fas fa-user-edit"></i></a>
                                    <a href="./deletar?id=<?= $linhas['ID']?>" class="link excluir"><i
                                            class="fas fa-trash-alt"></i></a>
                                </div>
                                <div class="cell" data-title="Status">
                                    <?php if($linhas['status']) echo "Ativo"; else echo "Inativo"; ?>
                                </div>
                                <div class="cell" data-title="Razão Social">
                                    <?= $linhas['razaoSoc'] ?>
                                </div>
                                <div class="cell" data-title="Nome Fantasia">
                                    <?= $linhas['nomeFanta'] ?>
                                </div>
                                <div class="cell" data-title="CNPJ">
                                    <?php 
                                echo $linhas['cnpj']
                            ?>
                                </div>
                                <div class="cell" data-title="Categoria">
                                    <?= $linhas['cat_name'] ?>
                                </div>
                                <div class="cell" data-title="E-mail">
                                    <?= $linhas['email'] ?>
                                </div>
                                <div class="cell" data-title="Telefone">
                                    <?= $linhas['telefone'] ?>
                                </div>
                                <div class="cell" data-title="Endereço">
                                    <?= $linhas['endereco']." ". $linhas['cidade']. " ". $linhas['estado'] ?>
                                </div>
                                <div class="cell" data-title="Agencia">
                                    <?= $linhas['agencia'] ?>
                                </div>
                                <div class="cell" data-title="Conta">
                                    <?= $linhas['conta'] ?>
                                </div>




                            </div>






                        </div>
                    </div>
                    <?php
                        }
                        ?>
                </div>




            </div>
            <?php }
            else{
                echo "<div class='wrapper'>
                Nenhuma empresa cadastrada
                </div>";
                
            }?>
        </article>
        <?php
            include "footer.php"
        ?>
    </main>
</body>

</html>