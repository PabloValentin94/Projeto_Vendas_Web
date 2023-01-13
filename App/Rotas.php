<?php

$url = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

switch($url)
{

    case "/":
        echo "Início";
    break;

    default:
        echo "Error 404";

}

?>