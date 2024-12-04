<?php

declare(strict_types=1);

namespace Bni\Gpec\WsdlToPhp\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Send ServiceType
 * @subpackage Services
 */
class Send extends AbstractSoapClientBase
{
    /**
     * Sets the HeaderRequest SoapHeader param
     * @param \Bni\Gpec\WsdlToPhp\StructType\GPECHeaderRequest $headerRequest
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \Bni\Gpec\WsdlToPhp\ServiceType\Send
     *@uses AbstractSoapClientBase::setSoapHeader()
     */
    public function setSoapHeaderHeaderRequest(\Bni\Gpec\WsdlToPhp\StructType\GPECHeaderRequest $headerRequest, string $namespace = 'header.service.gpec.bnl.it', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'headerRequest', $headerRequest, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named sendMail
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: headerRequest
     * - SOAPHeaderNamespaces: header.service.gpec.bnl.it
     * - SOAPHeaderTypes: \Bni\Gpec\WsdlToPhp\StructType\GPECHeaderRequest
     * - SOAPHeaders: required
     * - documentation: Documentation available at the following link
     * @param \Bni\Gpec\WsdlToPhp\StructType\SendMail $parameters
     * @return \Bni\Gpec\WsdlToPhp\StructType\SendMailResponse|bool
     *@uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function sendMail(\Bni\Gpec\WsdlToPhp\StructType\SendMail $parameters)
    {
        try {
            var_dump($parameters);
            $this->setResult($resultSendMail = $this->getSoapClient()->__soapCall('sendMail', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultSendMail;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Returns the result
     * @return \Bni\Gpec\WsdlToPhp\StructType\SendMailResponse
     * @see AbstractSoapClientBase::getResult()
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
