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
        <?php include "header.php" ?>

        <article class="container">
            <div class="wrapper">
                <div class="row justify-content-between align-items-center">
                    <div class="col-6">
                        <h1>Cadastrar novo cliente</h1>
                    </div>

                    <a href="./" class="btn-fitcard">Voltar</a>

                </div>
                <form action="cadastrar.php" method="post">
                    <div class="row">
                        <div class="col-lg-3 mb-2">
                            <label for="status">Status</label>
                            <select class="form-control" name="status" id="status">
                                <option value="" selected disabled>----</option>
                                <option value="1">Ativo</option>
                                <option value="0">Inativo</option>
                            </select>
                        </div>
                        <div class="col-lg-12 mb-2">
                            <label for="razaoSoc">Razão Social</label> <input class="form-control" type="text"
                                name="razaoSoc" id="razaoSoc" required>
                        </div>
                        <div class="col-lg-12 mb-2">
                            <label for="nomeFanta">Nome Fantasia</label> <input class="form-control" type="text"
                                name="nomeFanta" id="nomeFanta">
                        </div>
                        <div class="col-lg-4 mb-2">
                            <label for="cnpj">CNPJ</label> <input class="form-control" type="text" name="cnpj" id="cnpj"
                                placeholder="xx.xxx.xxx/xxxx-xx" required>
                        </div>
                        <div class="col-lg-4 mb-2">
                            <label for="dataCad">Data do Cadastro</label>
                            <input class="form-control" type="date" name="dataCad" id="dataCad">
                        </div>
                        <div class="col-lg-4 mb-2">
                            <label for="catID">Categoria</label>
                            <select class="form-control" name="catID" id="catID">
                                <option value="------" selected disabled>------</option>
                                <option value="0">Supermercado</option>
                                <option value="1">Restaurante</option>
                                <option value="2">Borracharia</option>
                                <option value="3">Posto</option>
                                <option value="4">Oficina</option>
                            </select>
                        </div>
                        <div class="col-lg-6 mb-2">
                            <label for="email">E-mail</label> <input class="form-control" type="email" name="email"
                                id="email">
                        </div>
                        <div class="col-lg-6 mb-2">
                            <label for="telefone">Telefone</label> <input class="form-control" type="tel"
                                name="telefone" id="telefone">
                        </div>
                        <div class="col-lg-6 mb-2">
                            <label for="endereco">Endereço</label> <input type="text" class="form-control"
                                name="endereco" id="endereco">
                        </div>
                        <div class="col-lg-4 mb-2">
                            <label for="cidade">Cidade</label> <input type="text" class="form-control" name="cidade"
                                id="cidade">
                        </div>
                        <div class="col-lg-2 mb-2">
                            <label for="estado">Estado</label>
                            <select name="estado" id="estado" class="form-control">
                                <option value="--" selected disabled>--</option>
                                <option value="AC">AC</option>
                                <option value="AL">AL</option>
                                <option value="AP">AP</option>
                                <option value="AM">AM</option>
                                <option value="BA">BA</option>
                                <option value="CE">CE</option>
                                <option value="DF">DF</option>
                                <option value="ES">ES</option>
                                <option value="GO">GO</option>
                                <option value="MA">MA</option>
                                <option value="MS">MS</option>
                                <option value="MT">MT</option>
                                <option value="MG">MG</option>
                                <option value="PA">PA</option>
                                <option value="PB">PB</option>
                                <option value="PR">PR</option>
                                <option value="PE">PE</option>
                                <option value="PI">PI</option>
                                <option value="RJ">RJ</option>
                                <option value="RN">RN</option>
                                <option value="RS">RS</option>
                                <option value="RO">RO</option>
                                <option value="RR">RR</option>
                                <option value="SC">SC</option>
                                <option value="SP">SP</option>
                                <option value="SE">SE</option>
                                <option value="TO">TO</option>
                            </select>
                        </div>
                        <div class="col-lg-6 mb-2">
                            <label for="agencia">Agencia</label>
                            <input placeholder="xxx-x" type="text" class="form-control" name="agencia" id="agencia">
                        </div>
                        <div class="col-lg-6 mb-2">
                            <label for="conta">Conta</label>
                            <input placeholder="xx.xxx-x" type="text" class="form-control" name="conta" id="conta">
                        </div>
                        <div class="col-lg-2">
                            <button type="submit" class="btn-fitcard">Cadastrar</button>
                        </div>
                    </div>
                </form>
            </div>
        </article>
        <?php
            include "footer.php"
        ?>
    </main>
</body>

</html>