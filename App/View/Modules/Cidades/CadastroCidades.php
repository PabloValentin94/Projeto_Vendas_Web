<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="shortcut icon" href="/View/Modules/Cidades/Images/Favicon.png">

        <link rel="stylesheet" type="text/css" href="/View/Modules/Cidades/CSS/Cadastro.css">

        <title> Cadastro de Cidades </title>

    </head>

    <body>

        <div id="container">

            <div id="banner">  </div>

            <div id="conteudo">

                <h2> Cadastro de Cidades </h2>

                <div id="campos">

                    <form action="/cidades/cadastro/salvar" method="post" id="form">

                        <input type="hidden" name="id" value="<?= $model->id ?>">

                        <label for="nome"> Nome: </label>
                        <input type="text" name="nome" maxlength="100" minlength="3"
                        placeholder="Insira o texto aqui" value="<?= $model->nome ?>" required>

                        <button type="submit"> SALVAR </button>

                    </form>

                </div>

                <div id="botoes">

                    <button id="btn_voltar"> <a href="/"> VOLTAR </a> </button>
                    <button id="btn_listagem"> <a href="/cidades/listagem"> LISTAGEM </a> </button>

                </div>

            </div>

        </div>
        
    </body>

</html>