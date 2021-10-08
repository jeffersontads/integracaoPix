<?php 
namespace App\Pix;

class Api {
    /**
     * Url base do PSP
     * @var string
     */
    private $baseUrl;

    /**
     * Client ID do oAuth2 do PSP
     * @var string
     */
    private $clientId;

    /**
     * Client SECRET do oAuth2 do PSP
     * @var string
     */
    private $clientSecret;

    /**
     * Caminho absoluto ate o arquivo do certificado que foi gerado pelo nosso psp
     * @var string
     */
    private $certificate;

    /**
     * Define os dados iniciais
     * @param string $base
     * @param string $clientId
     * @param string $clientSecret
     * @param string $certificate
     */

     public function __construct($baseUrl, $clientId, $clientSecret, $certificate) {
         $this->baseUrl = $baseUrl;
         $this->clientId = $clientId;
         $this->clientSecret = $clientSecret;
         $this->certificate = $certificate;
     }

    
}
?>