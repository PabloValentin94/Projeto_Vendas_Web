<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="shortcut icon" href="/View/Modules/Clientes/Images/Favicon.png">

        <link rel="stylesheet" type="text/css" href="/View/Modules/Clientes/CSS/Cadastro.css">

        <title> Cadastro de Clientes </title>

    </head>

    <body>

        <div id="container">

            <div id="banner">  </div>

            <div id="conteudo">

                <h2> Cadastro de Clientes </h2>

                <div id="campos">

                    <form action="/clientes/cadastro/salvar" method="post" id="form">

                        <input type="hidden" name="id" value="<?= $model[0]->id ?>">

                        <span class="linha">

                            <span class="campo">

                                <label for="nome"> Nome: </label>
                                <input type="text" name="nome" maxlength="100" minlength="2"
                                placeholder="Nome - Cliente" value="<?= $model[0]->nome ?>" required>

                            </span>

                            <span class="campo">

                                <label for="id_cidade"> Cidade: </label>
                                <select name="id_cidade">

                                    <?php foreach($model[1] as $cidade): ?>

                                        <?php if(isset($_GET["id"])): ?>

                                            <?php if($cidade->id == $model[0]->fk_cidade): ?>

                                                <option value="<?= $cidade->id ?>" selected> <?= $cidade->nome ?> </option>

                                            <?php else: ?>

                                                <option value="<?= $cidade->id ?>"> <?= $cidade->nome ?> </option>

                                            <?php endif ?>

                                        <?php else: ?>

                                            <option value="<?= $cidade->id ?>"> <?= $cidade->nome ?> </option>

                                        <?php endif ?>

                                    <?php endforeach ?>

                                </select>

                            </span>

                        </span>

                        <span class="linha">

                            <span class="campo">

                                <label for="email"> E-mail: </label>
                                <input type="email" name="email" maxlength="100" minlength="11"
                                placeholder="E-mail - Cliente" value="<?= $model[0]->email ?>" required>

                            </span>

                            <span class="campo">

                                <label for="cpf"> CPF: </label>
                                <input type="text" name="cpf" maxlength="14" minlength="11"
                                placeholder="###.###.###-##" value="<?= $model[0]->cpf ?>" required>

                            </span>

                        </span>

                        <span class="linha">

                            <span class="campo">

                                <label for="telefone"> Telefone: </label>
                                <input type="tel" name="telefone" maxlength="15" minlength="8"
                                placeholder="(##) #####-####" value="<?= $model[0]->telefone ?>">

                            </span>

                            <span class="campo">

                                <label for="renda"> Renda: </label>
                                <input type="text" name="renda" maxlength="16" minlength="1"
                                placeholder="($) Renda - Cliente" value="<?= $model[0]->renda ?>">

                            </span>

                        </span>

                        <span class="linha">

                            <span class="campo">

                                <label for="data_nascimento"> Data de Nascimento: </label>
                                <input type="date" name="data_nascimento" value="<?= date($model[0]->data_nascimento) ?>">

                            </span>

                            <span class="campo">

                                <?php if($model[0]->bloqueio_venda == 1): ?>

                                    <label for="bloqueio_venda"> Bloquear Venda: </label>
                                    <input type="checkbox" name="bloqueio_venda" value="<?= $model[0]->bloqueio_venda ?>" checked>

                                <?php else: ?>

                                    <label for="bloqueio_venda"> Bloquear Venda: </label>
                                    <input type="checkbox" name="bloqueio_venda" value="<?= $model[0]->bloqueio_venda ?>">

                                <?php endif ?>

                            </span>

                        </span>

                        <button type="submit"> SALVAR </button>

                    </form>

                </div>

                <div id="botoes">

                    <button id="btn_voltar"> <a href="/"> INÍCIO </a> </button>
                    <button id="btn_listagem"> <a href="/clientes/listagem"> LISTAGEM </a> </button>

                </div>

            </div>

        </div>
        
    </body>

</html>