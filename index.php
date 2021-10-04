<?php 
    require __DIR__.'/vendor/autoload.php';

    //vamos fazer o aruqivo conehcer o classe isso é a dependencia da classe payload
    use \App\Pix\Payload;

    //chamada do metodo que define a chave pix da transacao
    $obPayload = (new Payload) -> setPixKey('12345678900');

?>