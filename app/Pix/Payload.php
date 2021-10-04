<?php 
/*CLASSE PARA GERER O PAYLOAD DO PIX ESTA CLASSE RECEBE ALGUNS DADOS DOP CLIENTE E TAMBEM TERA ALGUNS DADOS FIXOS*/

namespace App\Pix;

class Payload {
  /**
   * IDs do Payload do Pix
   * @var string
   */
    const ID_PAYLOAD_FORMAT_INDICATOR = '00';
    const ID_MERCHANT_ACCOUNT_INFORMATION = '26';
    const ID_MERCHANT_ACCOUNT_INFORMATION_GUI = '00';
    const ID_MERCHANT_ACCOUNT_INFORMATION_KEY = '01';
    const ID_MERCHANT_ACCOUNT_INFORMATION_DESCRIPTION = '02';
    const ID_MERCHANT_CATEGORY_CODE = '52';
    const ID_TRANSACTION_CURRENCY = '53';
    const ID_TRANSACTION_AMOUNT = '54';
    const ID_COUNTRY_CODE = '58';
    const ID_MERCHANT_NAME = '59';
    const ID_MERCHANT_CITY = '60';
    const ID_ADDITIONAL_DATA_FIELD_TEMPLATE = '62';
    const ID_ADDITIONAL_DATA_FIELD_TEMPLATE_TXID = '05';
    const ID_CRC16 = '63';
    
    /**
    * chave pix
    * @var string
    */
    private $pixKey;

        
    /**
    * descricao do pagamento
    * @var string
    */
    private $description;

        
    /**
    * nome do titular da conta
    * @var string
    */

    private $merchantName;

        
    /**
    * Cidade do titular da conta
    * @var string
    */
    private $merchantCity;

    /**
    * Id da transacaop pix
    * @var string
    */
    private $txId;

    /**
    * Valor da transacao
    * @var string
    */
    private $amount;

    /**
    * Metodo responsavel por definir o valor de $pixKey
    * @param string $pixKey
    */
    public function setPixKey($pixKey){
        $this->pixKey = $pixKey;
        return $this;
    }

    /**
    * Metodo responsavel por definir o valor de $description
    * @param string $description
    */
    public function setDescription($description){
        $this->description = $description;
        return $this;
    }

    /**
    * Metodo responsavel por definir o valor de $merchantName
    * @param string $pixKey
    */
    public function setMerchantname($merchantName){
        $this->merchantName = $merchantName;
        return $this;
    }

    /**
    * Metodo responsavel por definir o valor de $merchantCity
    * @param string $description
    */
    public function setMerchantCity($merchantCity){
        $this->merchantCity = $merchantCity;
        return $this;
    }

    
        /**
    * Metodo responsavel por definir o valor de $txID
    * @param string $pixKey
    */
    public function setTxId($txId){
        $this->txId = $txId;
        return $this;
    }

    /**
    * Metodo responsavel por definir o valor de $amount
    * @param float $description
    */
    public function setAmount($amount){
        $this->amount = (string)number_format($amount, 2,'.', '');
        return $this;
    }
    
}