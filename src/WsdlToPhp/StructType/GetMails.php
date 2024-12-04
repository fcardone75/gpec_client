<?php

declare(strict_types=1);

namespace Bni\Gpec\WsdlToPhp\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getMails StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMails extends AbstractStructBase
{
    /**
     * The GetMailsRequest
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: s1:GetMailsRequest
     * @var \Bni\Gpec\WsdlToPhp\StructType\GetMailsRequest
     */
    protected \Bni\Gpec\WsdlToPhp\StructType\GetMailsRequest $GetMailsRequest;
    /**
     * Constructor method for getMails
     * @param \Bni\Gpec\WsdlToPhp\StructType\GetMailsRequest $getMailsRequest
     * @uses GetMails::setGetMailsRequest()
     */
    public function __construct(\Bni\Gpec\WsdlToPhp\StructType\GetMailsRequest $getMailsRequest)
    {
        $this
            ->setGetMailsRequest($getMailsRequest);
    }
    /**
     * Get GetMailsRequest value
     * @return \Bni\Gpec\WsdlToPhp\StructType\GetMailsRequest
     */
    public function getGetMailsRequest(): \Bni\Gpec\WsdlToPhp\StructType\GetMailsRequest
    {
        return $this->GetMailsRequest;
    }
    /**
     * Set GetMailsRequest value
     * @param \Bni\Gpec\WsdlToPhp\StructType\GetMailsRequest $getMailsRequest
     * @return \Bni\Gpec\WsdlToPhp\StructType\GetMails
     */
    public function setGetMailsRequest(\Bni\Gpec\WsdlToPhp\StructType\GetMailsRequest $getMailsRequest): self
    {
        $this->GetMailsRequest = $getMailsRequest;

        return $this;
    }
}
