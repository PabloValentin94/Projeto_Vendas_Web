<?php

namespace App\Controller;

use App\Model\CaixaModel;

class CaixaController extends Controller
{

    public static function Pagamento()
    {

        $model = new CaixaModel();

        parent::render("Caixa/Pagamento", $model);

    }

    public static function Salvar()
    {

        echo $_POST["forma_pagamento"];

    }

}

?>