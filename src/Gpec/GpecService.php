<?php

namespace Bni\Gpec\Gpec;

use Bni\Gpec\Logger\Logger;
use Bni\Gpec\WsdlToPhp\ServiceType\Get;
use Bni\Gpec\WsdlToPhp\ServiceType\Send;
use Bni\Gpec\WsdlToPhp\StructType\Client;
use Bni\Gpec\WsdlToPhp\StructType\GetVersion;
use Bni\Gpec\WsdlToPhp\StructType\GPECHeaderRequest;
use Bni\Gpec\WsdlToPhp\StructType\MessageInfoSender;
use Bni\Gpec\WsdlToPhp\StructType\SendMail;
use Bni\Gpec\WsdlToPhp\StructType\SendMailRequest;
use Dotenv\Dotenv;
use Psr\Log\LogLevel;
use Ramsey\Uuid\Uuid;
use SoapClient;


/**
 * Classe che contiene tutti i servizi utilizzabili con il client gpec
 */
class GpecService
{
    private SoapClient $soapClient;
    private Logger $loggerService;

    public function __construct(?int $upFolderEnvFile = 2)
    {
        $this->loggerService = new Logger($upFolderEnvFile);
        $dotenv = Dotenv::createImmutable(dirname(__DIR__, $upFolderEnvFile));
        $dotenv->load();

        // Headers HTTP per accedere al WSDL
        $httpHeaders = [
            'RSMHostAlias: ' . $_ENV[EnvUtility::BNI_GPEC_RSM_HOST_ALIAS],
            'RSMCaller: ' . $_ENV[EnvUtility::BNI_GPEC_RSM_CALLER],
        ];

        $streamContext = stream_context_create([
            'http' => [
                'header' => implode("\r\n", $httpHeaders),
            ],
        ]);

        $options = [
            'stream_context' => $streamContext,
            'location' => $_ENV[EnvUtility::BNI_GPEC_WSDL_ENDPOINT],
            'uri' => $_ENV[EnvUtility::BNI_GPEC_WSDL_LOCATION],
        ];

        $this->soapClient = new SoapClient($_ENV[EnvUtility::BNI_GPEC_WSDL_LOCATION], $options);
    }

    /**
     *
     * Invia la mail con i parametri passati
     *
     * @param string $to
     * @param string $subject
     * @param string $body
     * @return array
     */
    public function sendMail(string $to, string $subject, string $body)
    {
        $trackingId=(Uuid::uuid7())->toString();
        $this->loggerService->getLogger()->debug("Invio email a $to");
        $this->loggerService->getLogger()->debug("GPEC USER ID ".$_ENV[EnvUtility::BNI_GPEC_USER_ID]);
        $this->loggerService->getLogger()->debug("USER ".$_ENV[EnvUtility::BNI_GPEC_USER]);
        $this->loggerService->getLogger()->debug("APPLICATION ID ".$_ENV[EnvUtility::BNI_APPLICATION_ID]);
        $this->loggerService->getLogger()->debug("TRACKING ID $trackingId");

        $client = new Client($_ENV[EnvUtility::BNI_GPEC_USER], $_ENV[EnvUtility::BNI_GPEC_PASSWORD]);
        $gpecHeaderRequest = new GPECHeaderRequest(
            $_ENV[EnvUtility::BNI_GPEC_USER_ID],
            $_ENV[EnvUtility::BNI_APPLICATION_ID],
            $trackingId,
        );
        $send = new Send();
        $send->setSoapClient($this->soapClient);
        $send->setSoapHeaderHeaderRequest(
            $gpecHeaderRequest
        );

        $messageInfoSender = new MessageInfoSender(
            $_ENV[EnvUtility::BNI_GPEC_SUBJECT_ENCODING],
            $_ENV[EnvUtility::BNI_GPEC_BODY_ENCODING],
            $_ENV[EnvUtility::BNI_IS_BODY_HTML],
            $_ENV[EnvUtility::BNI_GPEC_PRIORITY],
            $_ENV[EnvUtility::BNI_GPEC_HEADERS_ENCODING],
            $to,
            null,
            null,
            null,
            $subject,
            $body,
            null,
        );
        $sendMailRequest = new SendMailRequest($messageInfoSender);
        $sendMailRequest->setClient($client);
        $sendMail = new SendMail($sendMailRequest);
        $sendMailResponse = $send->sendMail($sendMail);
        $headersResponse = $send->getOutputHeaders();
        return [
            'soapHeaders' => $headersResponse,
            'soapResponse' => $sendMailResponse
        ];
    }


    public function getVersion()
    {
        $getVersion = new GetVersion();
        $get = new Get();
        $get->setSoapClient($this->soapClient);
        $getVersionResponse = $get->getVersion($getVersion);
        $headersResponse = $get->getOutputHeaders();

        return [
            'soapHeaders' => $headersResponse,
            'soapResponse' => $getVersionResponse
        ];

        return $response;
    }
}
