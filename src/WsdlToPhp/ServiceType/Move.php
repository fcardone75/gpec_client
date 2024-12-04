<?php

declare(strict_types=1);

namespace Bni\Gpec\WsdlToPhp\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Move ServiceType
 * @subpackage Services
 */
class Move extends AbstractSoapClientBase
{
    /**
     * Sets the HeaderRequest SoapHeader param
     * @param \Bni\Gpec\WsdlToPhp\StructType\GPECHeaderRequest $headerRequest
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \Bni\Gpec\WsdlToPhp\ServiceType\Move
     *@uses AbstractSoapClientBase::setSoapHeader()
     */
    public function setSoapHeaderHeaderRequest(\Bni\Gpec\WsdlToPhp\StructType\GPECHeaderRequest $headerRequest, string $namespace = 'header.service.gpec.bnl.it', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'headerRequest', $headerRequest, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named moveMessage
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: headerRequest
     * - SOAPHeaderNamespaces: header.service.gpec.bnl.it
     * - SOAPHeaderTypes: \Bni\Gpec\WsdlToPhp\StructType\GPECHeaderRequest
     * - SOAPHeaders: required
     * - documentation: Documentation available at the following link
     * @param \Bni\Gpec\WsdlToPhp\StructType\MoveMessage $parameters
     * @return \Bni\Gpec\WsdlToPhp\StructType\MoveMessageResponse|bool
     *@uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function moveMessage(\Bni\Gpec\WsdlToPhp\StructType\MoveMessage $parameters)
    {
        try {
            $this->setResult($resultMoveMessage = $this->getSoapClient()->__soapCall('moveMessage', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultMoveMessage;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Returns the result
     * @return \Bni\Gpec\WsdlToPhp\StructType\MoveMessageResponse
     * @see AbstractSoapClientBase::getResult()
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
