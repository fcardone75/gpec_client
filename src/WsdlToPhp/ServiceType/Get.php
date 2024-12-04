<?php

declare(strict_types=1);

namespace Bni\Gpec\WsdlToPhp\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 */
class Get extends AbstractSoapClientBase
{
    /**
     * Sets the HeaderRequest SoapHeader param
     * @param \Bni\Gpec\WsdlToPhp\StructType\GPECHeaderRequest $headerRequest
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \Bni\Gpec\WsdlToPhp\ServiceType\Get
     *@uses AbstractSoapClientBase::setSoapHeader()
     */
    public function setSoapHeaderHeaderRequest(\Bni\Gpec\WsdlToPhp\StructType\GPECHeaderRequest $headerRequest, string $namespace = 'header.service.gpec.bnl.it', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'headerRequest', $headerRequest, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named getVersion
     * Meta information extracted from the WSDL
     * - documentation: This method is only for try the if the service is up and is callable
     * @param \Bni\Gpec\WsdlToPhp\StructType\GetVersion $parameters
     * @return \Bni\Gpec\WsdlToPhp\StructType\GetVersionResponse|bool
     *@uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function getVersion(\Bni\Gpec\WsdlToPhp\StructType\GetVersion $parameters)
    {
        try {
            $this->setResult($resultGetVersion = $this->getSoapClient()->__soapCall('getVersion', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetVersion;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named getMailCount
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: headerRequest
     * - SOAPHeaderNamespaces: header.service.gpec.bnl.it
     * - SOAPHeaderTypes: \Bni\Gpec\WsdlToPhp\StructType\GPECHeaderRequest
     * - SOAPHeaders: required
     * - documentation: Documentation available at the following link
     * @param \Bni\Gpec\WsdlToPhp\StructType\GetMailCount $parameters
     * @return \Bni\Gpec\WsdlToPhp\StructType\GetMailCountResponse|bool
     *@uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function getMailCount(\Bni\Gpec\WsdlToPhp\StructType\GetMailCount $parameters)
    {
        try {
            $this->setResult($resultGetMailCount = $this->getSoapClient()->__soapCall('getMailCount', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetMailCount;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named getMailById
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: headerRequest
     * - SOAPHeaderNamespaces: header.service.gpec.bnl.it
     * - SOAPHeaderTypes: \Bni\Gpec\WsdlToPhp\StructType\GPECHeaderRequest
     * - SOAPHeaders: required
     * - documentation: Documentation available at the following link
     * @param \Bni\Gpec\WsdlToPhp\StructType\GetMailById $parameters
     * @return \Bni\Gpec\WsdlToPhp\StructType\GetMailByIdResponse|bool
     *@uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function getMailById(\Bni\Gpec\WsdlToPhp\StructType\GetMailById $parameters)
    {
        try {
            $this->setResult($resultGetMailById = $this->getSoapClient()->__soapCall('getMailById', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetMailById;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named getMailsAndReceipts
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: headerRequest
     * - SOAPHeaderNamespaces: header.service.gpec.bnl.it
     * - SOAPHeaderTypes: \Bni\Gpec\WsdlToPhp\StructType\GPECHeaderRequest
     * - SOAPHeaders: required
     * - documentation: Documentation available at the following link
     * @param \Bni\Gpec\WsdlToPhp\StructType\GetMailsAndReceipts $parameters
     * @return \Bni\Gpec\WsdlToPhp\StructType\GetMailsAndReceiptsResponse|bool
     *@uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function getMailsAndReceipts(\Bni\Gpec\WsdlToPhp\StructType\GetMailsAndReceipts $parameters)
    {
        try {
            $this->setResult($resultGetMailsAndReceipts = $this->getSoapClient()->__soapCall('getMailsAndReceipts', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetMailsAndReceipts;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named getMails
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: headerRequest
     * - SOAPHeaderNamespaces: header.service.gpec.bnl.it
     * - SOAPHeaderTypes: \Bni\Gpec\WsdlToPhp\StructType\GPECHeaderRequest
     * - SOAPHeaders: required
     * - documentation: Documentation available at the following link
     * @param \Bni\Gpec\WsdlToPhp\StructType\GetMails $parameters
     * @return \Bni\Gpec\WsdlToPhp\StructType\GetMailsResponse|bool
     *@uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function getMails(\Bni\Gpec\WsdlToPhp\StructType\GetMails $parameters)
    {
        try {
            $this->setResult($resultGetMails = $this->getSoapClient()->__soapCall('getMails', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetMails;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named getMailsFrom
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: headerRequest
     * - SOAPHeaderNamespaces: header.service.gpec.bnl.it
     * - SOAPHeaderTypes: \Bni\Gpec\WsdlToPhp\StructType\GPECHeaderRequest
     * - SOAPHeaders: required
     * - documentation: Documentation available at the following link
     * @param \Bni\Gpec\WsdlToPhp\StructType\GetMailsFrom $parameters
     * @return \Bni\Gpec\WsdlToPhp\StructType\GetMailsFromResponse|bool
     *@uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function getMailsFrom(\Bni\Gpec\WsdlToPhp\StructType\GetMailsFrom $parameters)
    {
        try {
            $this->setResult($resultGetMailsFrom = $this->getSoapClient()->__soapCall('getMailsFrom', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetMailsFrom;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named getMailsTo
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: headerRequest
     * - SOAPHeaderNamespaces: header.service.gpec.bnl.it
     * - SOAPHeaderTypes: \Bni\Gpec\WsdlToPhp\StructType\GPECHeaderRequest
     * - SOAPHeaders: required
     * - documentation: Documentation available at the following link
     * @param \Bni\Gpec\WsdlToPhp\StructType\GetMailsTo $parameters
     * @return \Bni\Gpec\WsdlToPhp\StructType\GetMailsToResponse|bool
     *@uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function getMailsTo(\Bni\Gpec\WsdlToPhp\StructType\GetMailsTo $parameters)
    {
        try {
            $this->setResult($resultGetMailsTo = $this->getSoapClient()->__soapCall('getMailsTo', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetMailsTo;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Method to call the operation originally named getMailsRange
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: headerRequest
     * - SOAPHeaderNamespaces: header.service.gpec.bnl.it
     * - SOAPHeaderTypes: \Bni\Gpec\WsdlToPhp\StructType\GPECHeaderRequest
     * - SOAPHeaders: required
     * - documentation: Documentation available at the following link
     * @param \Bni\Gpec\WsdlToPhp\StructType\GetMailsRange $parameters
     * @return \Bni\Gpec\WsdlToPhp\StructType\GetMailsRangeResponse|bool
     *@uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function getMailsRange(\Bni\Gpec\WsdlToPhp\StructType\GetMailsRange $parameters)
    {
        try {
            $this->setResult($resultGetMailsRange = $this->getSoapClient()->__soapCall('getMailsRange', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetMailsRange;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }
    /**
     * Returns the result
     * @return \Bni\Gpec\WsdlToPhp\StructType\GetMailByIdResponse|\Bni\Gpec\WsdlToPhp\StructType\GetMailCountResponse|\Bni\Gpec\WsdlToPhp\StructType\GetMailsAndReceiptsResponse|\Bni\Gpec\WsdlToPhp\StructType\GetMailsFromResponse|\Bni\Gpec\WsdlToPhp\StructType\GetMailsRangeResponse|\Bni\Gpec\WsdlToPhp\StructType\GetMailsResponse|\Bni\Gpec\WsdlToPhp\StructType\GetMailsToResponse|\Bni\Gpec\WsdlToPhp\StructType\GetVersionResponse
     *@see AbstractSoapClientBase::getResult()
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
