<?php 
    require __DIR__.'/vendor/autoload.php';

    //vamos fazer o aruqivo conehcer o classe isso é a dependencia da classe payload
    use \App\Pix\Payload;
    use \Mpdf\QrCode\Output;
    use Mpdf\QrCode\QrCode;

    //chamada do metodo que define a chave pix da transacao
    $obPayload = (new Payload) 
    -> setPixKey('04472653931')
    -> setDescription('Pagamento pedido SOTTO')
    -> setMerchantname('Jefferson Sotto')
    ->setMerchantCity('Foz do Iguaçu')
    ->setAmount('1.00')
    ->setTxId('jeff123')
    ;

    // recebe o valor de get ele retorna a string do qrcode
    //codigo de pagamento PIX
    $payLoadQrCode = $obPayload->getPayload();
    $obQrCode = new QrCode($payLoadQrCode);

//chamando uma das classes out para criar o qrcode usamos output image que vem junto com o mpdf qrcode e passamos o tamanho desta imagem
$image = (new Output\Png)->output($obQrCode,400);


//podemos imprimir a imagem do qrcode e tambem o codigo
?>

<h1>QRCODE PIX</h1>
<br>
<img src="data:image/png;base64, <?php echo base64_encode($image); ?>">
<br><br>

Codigo PIX:<br>
<strong><?php echo $payLoadQrCode; ?></strong>