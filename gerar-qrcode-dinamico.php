<?php 
    require __DIR__.'/vendor/autoload.php';

    //vamos fazer o aruqivo conehcer o classe isso é a dependencia da classe payload
    use App\Pix\Api;
    use \App\Pix\Payload;
    use \Mpdf\QrCode\Output;
    use Mpdf\QrCode\QrCode;

    //para ambiente de homologação
    $obApiPix = new Api
    (
        'https://api-pix-h.gerencianet.com.br', 
        'Client_Id_6c6e8504f8f48ac3a80ed7d8e194e33cbee6f05b', 
        'Client_Secret_b78f4edd92804eee657f12bee3a956d1dbe2f1e3'
    );