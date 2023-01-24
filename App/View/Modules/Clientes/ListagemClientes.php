<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="shortcut icon" href="/View/Modules/Clientes/Images/Favicon.png">

        <link rel="stylesheet" type="text/css" href="/View/Modules/Clientes/CSS/Listagem.css">

        <title> Listagem de Clientes </title>

    </head>

    <body>

        <div id="container">

            <div id="selecao">

                <form action="/clientes/listagem" method="post" name="form">

                    <label for="nome_cliente"> Cliente: </label>
                    <select name="nome_cliente">

                        <option value="nenhum"> Selecione </option>

                        <?php foreach($model[0] as $item): ?>

                            <option value="<?= $item->id ?>"> <?= $item->nome ?> (CPF: <?= $item->cpf ?>) </option>

                        <?php endforeach ?>

                    </select>

                    <button type="submit"> Procurar </button>

                </form>

            </div>

            <div id="exibicao">

                <div id="titulos">

                    <table id="header">

                        <tr> <th> ID </th> </tr>

                        <tr> <th> Nome </th> </tr>

                        <tr> <th> E-mail </th> </tr>

                        <tr> <th> CPF </th> </tr>

                        <tr> <th> Telefone </th> </tr>

                        <tr> <th> Data de Nascimento </th> </tr>

                        <tr> <th> Renda </th> </tr>

                        <tr> <th> Bloqueio - Venda </th> </tr>

                        <tr> <th> Cidade </th> </tr>

                        <tr> <th> Botão - Editar </th> </tr>

                        <tr> <th> Botão - Excluir </th> </tr>

                    </table>

                </div>

                <?php if($model[1] != NULL): ?>

                    <div id="registros">

                        <table id="content">

                            <tr> <td> <?= $model[1]->id ?> </td> </tr>

                            <tr> <td> <?= $model[1]->nome ?> </td> </tr>

                            <tr> <td> <?= $model[1]->email ?> </td> </tr>

                            <tr> <td> <?= $model[1]->cpf ?> </td> </tr>

                            <tr> <td> <?= $model[1]->telefone ?> </td> </tr>

                            <tr> <td> <?= $model[1]->data_nascimento ?> </td> </tr>

                            <tr> <td> $<?= $model[1]->renda ?> </td> </tr>

                            <?php if($model[1]->bloqueio_venda == 1): ?>

                                <tr> <td> <input type="checkbox" disabled checked> </td> </tr>

                            <?php else: ?>

                                <tr> <td> <input type="checkbox" disabled> </td> </tr>

                            <?php endif ?>

                            <tr> <td> <?= $model[2][0]->nome ?> </td> </tr>

                            <tr> <td> <button> <a href="/clientes/cadastro?id=<?= $model[1]->id ?>"> EDITAR </a> </button> </td> </tr>

                            <tr> <td> <button> <a href="/clientes/apagar?id=<?= $model[1]->id ?>"> EXCLUIR </a> </button> </td> </tr>

                        </table>

                    </div>

                <?php elseif(count($model[0]) == 0): ?>

                    <div class="no_rows">

                        <p> O sistema ainda não possui nenhum registro. </p>

                    </div>

                <?php else: ?>

                    <div class="no_rows">

                        <p> Nenhum registro encontrado. </p>

                    </div>

                <?php endif ?>

            </div>

        </div>
        
    </body>

</html>