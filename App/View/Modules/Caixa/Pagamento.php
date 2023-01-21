<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="shortcut icon" href="/View/Modules/Caixa/Images/Favicon.png">

        <link rel="stylesheet" type="text/css" href="/View/Modules/Caixa/CSS/Pagamento.css">

        <title> Formulário de Pagamento </title>

    </head>

    <body>

        <form action="/caixa/pagamento/salvar" method="post" id="form">

            <div id="container">

                <!--<form action="/caixa/pagamento/salvar" method="post" id="form">

                    <select name="tipo_pagamento" id="lista">

                        <optgroup label="Opções de pagamento:">

                            <option value="Nenhum"> Selecionar </option>
                            <option value="Dinheiro"> Dinheiro </option>
                            <option value="Crédito"> Crédito </option>
                            <option value="Débito"> Cheque </option>
                            <option value="Pix"> Pix </option>
                            <option value="Boleto"> Boleto </option>

                        </optgroup>

                    </select>

                    <button type="submit"> SALVAR </button>

                </form>-->

                <div id="forma_pagamento">

                    <div class="opcao">

                        <img src="/View/Modules/Caixa/Images/Formas_Pagamento/Dinheiro.png" alt="Icon-Dinheiro">
                    
                        <span> <input type="radio" name="forma_pagamento" value="Dinheiro" checked> <p style="margin-left: 5px; font-size:15px"> Dinheiro </p> </span>

                    </div>

                    <div class="opcao">

                        <img src="/View/Modules/Caixa/Images/Formas_Pagamento/Cartao_Credito.png" alt="Icon-Cartão_Crédito">
                        
                        <span> <input type="radio" name="forma_pagamento" value="Cartão de Crédito"> <p style="margin-left: 5px; font-size:15px"> Cartão de Crédito </p> </span>

                    </div>

                    <div class="opcao">

                        <img src="/View/Modules/Caixa/Images/Formas_Pagamento/Cheque.png" alt="Icon-Cheque">
                        
                        <span> <input type="radio" name="forma_pagamento" value="Cheque"> <p style="margin-left: 5px; font-size:15px"> Cheque </p> </span>

                    </div>

                    <div class="opcao">

                        <img src="/View/Modules/Caixa/Images/Formas_Pagamento/Pix.png" alt="Icon-Pix">
                        
                        <span> <input type="radio" name="forma_pagamento" value="Pix"> <p style="margin-left: 5px; font-size:15px"> Pix </p> </span>

                    </div>

                    <div class="opcao">

                        <img src="/View/Modules/Caixa/Images/Formas_Pagamento/Boleto.png" alt="Icon-Boleto">
                        
                        <span> <input type="radio" name="forma_pagamento" value="Boleto"> <p style="margin-left: 5px; font-size:15px"> Boleto </p> </span>

                    </div>

                </div>

                <div id="conteudo">

                    <div id="cliente">



                    </div>

                    <div id="venda">



                    </div>

                </div>

            </div>

            <span id="botoes">

                <button type="submit" style="background-color: #FF0000;"> <a href="/"> INÍCIO </a> </button>
                <button type="submit" style="background-color: #008000;"> <a href=""> SALVAR </a> </button>

            </span>

        </form>
        
    </body>

</html>