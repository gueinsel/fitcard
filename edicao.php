<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./dist/css/style.css">
    <title>Cadastrar Empresa Nova</title>
</head>

<body>
    <main>
        <?php 
        include "header.php" ;
        $consultaSQL ="SELECT * FROM empresas INNER JOIN categorias ON empresas.catID=categorias.id WHERE empresas.ID ='".$_GET['id']."'";
        
        $consultar = mysqli_query($conectar,$consultaSQL);
        while ($consulta = mysqli_fetch_assoc($consultar)) {
            
        
        ?>

        <article class="container">
            <div class="wrapper">
                <div class="row justify-content-between align-items-center">
                    <div class="col-6">
                        <h1>Cadastrar novo cliente</h1>
                    </div>

                    <a href="./" class="btn-fitcard">Voltar</a>

                </div>
                <form action="editar.php" method="post">
                    <div class="row">
                        <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
                        <div class="col-lg-3 mb-2">
                            <label for="status">Status</label>
                            <select class="form-control" name="status" id="status">
                                <option value="">----</option>
                                <option value="1" <?php if($consulta['status'] == 1) echo "selected" ?>>Ativo</option>
                                <option value="0" <?php if($consulta['status'] == 0) echo "selected" ?>>Inativo</option>
                            </select>
                        </div>
                        <div class="col-lg-12 mb-2">
                            <label for="razaoSoc">Razão Social</label> <input value="<?= $consulta['razaoSoc'] ?>"
                                class="form-control" type="text" name="razaoSoc" id="razaoSoc" required>
                        </div>
                        <div class="col-lg-12 mb-2">
                            <label for="nomeFanta">Nome Fantasia</label> <input value="<?= $consulta['nomeFanta'] ?>"
                                class="form-control" type="text" name="nomeFanta" id="nomeFanta">
                        </div>
                        <div class="col-lg-4 mb-2">
                            <label for="cnpj">CNPJ</label> <input value="<?= $consulta['cnpj'] ?>" class="form-control"
                                type="text" name="cnpj" id="cnpj" placeholder="xx.xxx.xxx/xxxx-xx" required>
                        </div>
                        <div class="col-lg-4 mb-2">
                            <label for="dataCad">Data do Cadastro</label>
                            <input value="<?= $consulta['dataCad'] ?>" class="form-control" type="date" name="dataCad"
                                id="dataCad">
                        </div>
                        <div class="col-lg-4 mb-2">
                            <label for="catID">Categoria</label>
                            <select class="form-control" name="catID" id="catID">
                                <option value="------">------</option>
                                <option value="0" <?php if($consulta['cat_name'] == 'Supermercado') echo "selected" ?>>
                                    Supermercado</option>
                                <option value="1" <?php if($consulta['cat_name'] == 'Restaurante') echo "selected" ?>>
                                    Restaurante</option>
                                <option value="2" <?php if($consulta['cat_name'] == 'Borracharia') echo "selected" ?>>
                                    Borracharia</option>
                                <option value="3" <?php if($consulta['cat_name'] == 'Posto') echo "selected" ?>>Posto
                                </option>
                                <option value="4" <?php if($consulta['cat_name'] == 'Oficina') echo "selected" ?>>
                                    Oficina</option>
                            </select>
                        </div>
                        <div class="col-lg-6 mb-2">
                            <label for="email">E-mail</label> <input value="<?= $consulta['email'] ?>"
                                class="form-control" type="email" name="email" id="email">
                        </div>
                        <div class="col-lg-6 mb-2">
                            <label for="telefone">Telefone</label> <input value="<?= $consulta['telefone'] ?>"
                                class="form-control" type="tel" name="telefone" id="telefone">
                        </div>
                        <div class="col-lg-6 mb-2">
                            <label for="endereco">Endereço</label> <input value="<?= $consulta['endereco'] ?>"
                                type="text" class="form-control" name="endereco" id="endereco">
                        </div>
                        <div class="col-lg-4 mb-2">
                            <label for="cidade">Cidade</label> <input value="<?= $consulta['cidade'] ?>" type="text"
                                class="form-control" name="cidade" id="cidade">
                        </div>
                        <div class="col-lg-2 mb-2">
                            <label for="estado">Estado</label>
                            <select name="estado" id="estado" class="form-control">
                                <option value="--">--</option>
                                <option value="AC" <?php if($consulta['estado'] == 'AC') echo "selected" ?>>AC</option>
                                <option value="AL" <?php if($consulta['estado'] == 'AL') echo "selected" ?>>AL</option>
                                <option value="AP" <?php if($consulta['estado'] == 'AP') echo "selected" ?>>AP</option>
                                <option value="AM" <?php if($consulta['estado'] == 'AM') echo "selected" ?>>AM</option>
                                <option value="BA" <?php if($consulta['estado'] == 'BA') echo "selected" ?>>BA</option>
                                <option value="CE" <?php if($consulta['estado'] == 'CE') echo "selected" ?>>CE</option>
                                <option value="DF" <?php if($consulta['estado'] == 'DF') echo "selected" ?>>DF</option>
                                <option value="ES" <?php if($consulta['estado'] == 'ES') echo "selected" ?>>ES</option>
                                <option value="GO" <?php if($consulta['estado'] == 'GO') echo "selected" ?>>GO</option>
                                <option value="MA" <?php if($consulta['estado'] == 'MA') echo "selected" ?>>MA</option>
                                <option value="MS" <?php if($consulta['estado'] == 'MS') echo "selected" ?>>MS</option>
                                <option value="MT" <?php if($consulta['estado'] == 'MT') echo "selected" ?>>MT</option>
                                <option value="MG" <?php if($consulta['estado'] == 'MG') echo "selected" ?>>MG</option>
                                <option value="PA" <?php if($consulta['estado'] == 'PA') echo "selected" ?>>PA</option>
                                <option value="PB" <?php if($consulta['estado'] == 'PB') echo "selected" ?>>PB</option>
                                <option value="PR" <?php if($consulta['estado'] == 'PR') echo "selected" ?>>PR</option>
                                <option value="PE" <?php if($consulta['estado'] == 'PE') echo "selected" ?>>PE</option>
                                <option value="PI" <?php if($consulta['estado'] == 'PI') echo "selected" ?>>PI</option>
                                <option value="RJ" <?php if($consulta['estado'] == 'RJ') echo "selected" ?>>RJ</option>
                                <option value="RN" <?php if($consulta['estado'] == 'RN') echo "selected" ?>>RN</option>
                                <option value="RS" <?php if($consulta['estado'] == 'RS') echo "selected" ?>>RS</option>
                                <option value="RO" <?php if($consulta['estado'] == 'RO') echo "selected" ?>>RO</option>
                                <option value="RR" <?php if($consulta['estado'] == 'RR') echo "selected" ?>>RR</option>
                                <option value="SC" <?php if($consulta['estado'] == 'SC') echo "selected" ?>>SC</option>
                                <option value="SP" <?php if($consulta['estado'] == 'SP') echo "selected" ?>>SP</option>
                                <option value="SE" <?php if($consulta['estado'] == 'SE') echo "selected" ?>>SE</option>
                                <option value="TO" <?php if($consulta['estado'] == 'TO') echo "selected" ?>>TO</option>
                            </select>
                        </div>
                        <div class="col-lg-6 mb-2">
                            <label for="agencia">Agencia</label>
                            <input value="<?= $consulta['agencia'] ?>" placeholder="xxx-x" type="text"
                                class="form-control" name="agencia" id="agencia">
                        </div>
                        <div class="col-lg-6 mb-2">
                            <label for="conta">Conta</label>
                            <input value="<?= $consulta['conta'] ?>" placeholder="xx.xxx-x" type="text"
                                class="form-control" name="conta" id="conta">
                        </div>
                        <div class="col-lg-2">
                            <button type="submit" class="btn-fitcard">Atualizar</button>
                        </div>
                    </div>
                </form>
            </div>
        </article>
        <?php
        }
            include "footer.php"
        ?>
    </main>
</body>

</html>