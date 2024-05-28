<?php

    require_once "vendor/autoload.php";

    use Oibelclav\DigitalCep\Search;

    $consulta = new Search;

    $resultado = $consulta->getAddressFromZipcode('79076300');

    print_r($resultado);

?>