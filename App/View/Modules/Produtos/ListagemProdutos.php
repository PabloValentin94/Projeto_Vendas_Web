<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="shortcut icon" href="/View/Modules/Produtos/Images/Favicon.png">

        <link rel="stylesheet" type="text/css" href="/View/Modules/Produtos/CSS/Listagem.css">

        <title> Listagem de Produtos </title>

    </head>

    <body>

        <div id="container">

            <div id="selecao">

                <form action="/produtos/listagem" method="post" name="form">

                    <label for="nome_produto"> Produto: </label>
                    <select name="nome_produto">

                        <option value="nenhum"> Selecione </option>

                        <?php foreach($model[0] as $item): ?>

                            <option value="<?= $item->id ?>"> <?= $item->nome ?> (ID: <?= $item->id ?>; Fornecedor: <?= $item->fornecedor ?>; Estoque: <?= $item->estoque ?>) </option>

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

                        <tr> <th> Fornecedor </th> </tr>

                        <tr> <th> Estoque </th> </tr>

                        <tr> <th> Preço de Compra </th> </tr>

                        <tr> <th> Preço de Venda </th> </tr>

                        <tr> <th> Categoria </th> </tr>

                        <tr> <th> Cor </th> </tr>

                        <tr> <th> Marca </th> </tr>

                        <tr> <th> Botão - Editar </th> </tr>

                        <tr> <th> Botão - Excluir </th> </tr>

                    </table>

                </div>

                <?php if($model[1] != NULL): ?>

                    <div id="registros">

                        <table id="content">

                            <tr> <td> <?= $model[1]->id ?> </td> </tr>

                            <tr> <td> <?= $model[1]->nome ?> </td> </tr>

                            <tr> <td> <?= $model[1]->fornecedor ?> </td> </tr>

                            <tr> <td> <?= $model[1]->estoque ?> </td> </tr>

                            <tr> <td> $<?= $model[1]->preco_compra ?> </td> </tr>

                            <tr> <td> $<?= $model[1]->preco_venda ?> </td> </tr>

                            <tr> <td> <?= $model[2][0]->descricao ?> </td> </tr>

                            <tr> <td> <?= $model[3][0]->descricao ?> </td> </tr>

                            <tr> <td> <?= $model[4][0]->descricao ?> </td> </tr>

                            <tr> <td> <button> <a href="/produtos/cadastro?id=<?= $model[1]->id ?>"> EDITAR </a> </button> </td> </tr>

                            <tr> <td> <button> <a href="/produtos/apagar?id=<?= $model[1]->id ?>"> EXCLUIR </a> </button> </td> </tr>

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