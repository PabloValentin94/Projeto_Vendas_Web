<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="shortcut icon" href="/View/Modules/Marcas/Images/Favicon.png">

        <link rel="stylesheet" type="text/css" href="/View/Modules/Marcas/CSS/Listagem.css">

        <title> Listagem de Marcas </title>

    </head>

    <body>

        <div id="container">

            <table id="header">

                <tr>

                    <th> ID </th>

                    <th> Descrição </th>

                    <th> Botão - Editar </th>

                    <th> Botão - Excluir </th>

                </tr>

            </table>

            <?php if(count($model->rows) != 0): ?>

                <div id="registros">

                    <table id="content">

                        <?php foreach($model->rows as $item): ?>
                        
                            <tr>

                                <td> <?= $item->id ?></td>

                                <td> <?= $item->descricao ?></td>

                                <td> <button> <a href="/marcas/cadastro?id=<?= $item->id ?>"> EDITAR </a> </button> </td>

                                <td> <button> <a href="/marcas/apagar?id=<?= $item->id ?>"> EXCLUIR </a> </button> </td>

                            </tr>

                        <?php endforeach ?>

                    </table>
                
                </div>

            <?php else: ?>

                <div id="no_rows">

                    <h1> O sistema ainda não possui nenhum registro. </h1>
                
                </div>

            <?php endif ?>

        </div>
        
    </body>

</html>