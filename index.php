<?php 
    require __DIR__.'/vendor/autoload.php';

    //vamos fazer o aruqivo conehcer o classe isso é a dependencia da classe payload
    use \App\Pix\Payload;

    //chamada do metodo que define a chave pix da transacao
    $obPayload = (new Payload) 
    -> setPixKey('04472653931')
    -> setDescription('Pagamento pedido SOTTO')
    -> setMerchantname('Jefferson Sotto')
    ->setMerchantCity('Foz do Iguaçu')
    ->setAmount('900.00')
    ->setTxId('jeff123')
    ;

    // recebe o valor de get ele retorna a string do qrcode
    $payLoadQrCode = $obPayload->getPayload();

    echo '<pre>';
    print_r($payLoadQrCode);
    echo '</pre>'; exit();
?>