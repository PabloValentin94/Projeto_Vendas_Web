<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="shortcut icon" href="/View/Modules/Produtos/Images/Favicon.png">

        <link rel="stylesheet" type="text/css" href="/View/Modules/Produtos/CSS/Cadastro.css">

        <title> Cadastro de Produtos </title>

    </head>

    <body>

        <div id="container">

            <div id="banner">  </div>

            <div id="conteudo">

                <h2> Cadastro de Produtos </h2>

                <div id="campos">

                    <form action="/produtos/cadastro/salvar" method="post" id="form">

                        <input type="hidden" name="id" value="<?= $model[0]->id ?>">

                        <span class="linha">

                            <span class="campo">

                                <label for="nome"> Nome: </label>
                                <input type="text" name="nome" maxlength="100" minlength="3"
                                placeholder="Nome - Produto" value="<?= $model[0]->nome ?>" required>

                            </span>

                            <span class="campo">

                                <label for="estoque"> Estoque: </label>
                                <input type="number" name="estoque" placeholder="Quantidade - Estoque"
                                value="<?= $model[0]->estoque ?>" required>

                            </span>

                        </span>

                        <span class="linha">

                            <span class="campo">

                                <label for="id_categoria"> Categoria: </label>
                                <select name="id_categoria">

                                    <?php foreach($model[1] as $categoria): ?>

                                        <?php if(isset($_GET["id"])): ?>

                                            <?php if($categoria->id == $model[0]->fk_categoria): ?>

                                                <option value="<?= $categoria->id ?>" selected> <?= $categoria->descricao ?> </option>

                                            <?php else: ?>

                                                <option value="<?= $categoria->id ?>"> <?= $categoria->descricao ?> </option>

                                            <?php endif ?>

                                        <?php else: ?>

                                            <option value="<?= $categoria->id ?>"> <?= $categoria->descricao ?> </option>

                                        <?php endif ?>

                                    <?php endforeach ?>

                                </select>

                            </span>

                            <span class="campo">

                                <label for="id_cor"> Cor: </label>
                                <select name="id_cor">

                                    <?php foreach($model[2] as $cor): ?>

                                        <?php if(isset($_GET["id"])): ?>

                                            <?php if($cor->id == $model[0]->fk_cor): ?>

                                                <option value="<?= $cor->id ?>" selected> <?= $cor->descricao ?> </option>

                                            <?php else: ?>

                                                <option value="<?= $cor->id ?>"> <?= $cor->descricao ?> </option>

                                            <?php endif ?>

                                        <?php else: ?>

                                            <option value="<?= $cor->id ?>"> <?= $cor->descricao ?> </option>

                                        <?php endif ?>

                                    <?php endforeach ?>

                                </select>

                            </span>

                        </span>

                        <span class="linha">

                            <span class="campo">

                                <label for="id_marca"> Marca: </label>
                                <select name="id_marca">

                                    <?php foreach($model[3] as $marca): ?>

                                        <?php if(isset($_GET["id"])): ?>

                                            <?php if($marca->id == $model[0]->fk_marca): ?>

                                                <option value="<?= $marca->id ?>" selected> <?= $marca->descricao ?> </option>

                                            <?php else: ?>

                                                <option value="<?= $marca->id ?>"> <?= $marca->descricao ?> </option>

                                            <?php endif ?>

                                        <?php else: ?>

                                            <option value="<?= $marca->id ?>"> <?= $marca->descricao ?> </option>

                                        <?php endif ?>

                                    <?php endforeach ?>

                                </select>

                            </span>

                            <span class="campo">

                                <label for="fornecedor"> Fornecedor: </label>
                                <input type="text" name="fornecedor" maxlength="100" minlength="2"
                                placeholder="Nome - Fornecedor" value="<?= $model[0]->fornecedor ?>" required>

                            </span>

                        </span>

                        <span class="linha">

                            <span class="campo">

                                <label for="preco_compra"> Compra: </label>
                                <input type="text" name="preco_compra" maxlength="16" minlength="1"
                                placeholder="($) Preço de Compra" value="<?= $model[0]->preco_compra ?>">

                            </span>

                            <span class="campo">

                                <label for="preco_venda"> Venda: </label>
                                <input type="text" name="preco_venda" maxlength="16" minlength="1"
                                placeholder="($) Preço de Venda" value="<?= $model[0]->preco_venda ?>">

                            </span>

                        </span>

                        <button type="submit"> SALVAR </button>

                    </form>

                </div>

                <div id="botoes">

                    <button id="btn_voltar"> <a href="/"> INÍCIO </a> </button>
                    <button id="btn_listagem"> <a href="/produtos/listagem"> LISTAGEM </a> </button>

                </div>

            </div>

        </div>
        
    </body>

</html>