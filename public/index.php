<?php

require_once 'C:\wamp64\www\projet_composer_wcs\vendor\autoload.php';

$hello = new app\Wcs\Hello();
$ehime = new HelloWorld\SayHello();

echo $hello->talk();
echo $ehime->world();

?>