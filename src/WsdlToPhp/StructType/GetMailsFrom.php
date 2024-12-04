<?php

declare(strict_types=1);

namespace Bni\Gpec\WsdlToPhp\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getMailsFrom StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMailsFrom extends AbstractStructBase
{
    /**
     * The GetMailsFromRequest
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: s1:GetMailsFromRequest
     * @var \Bni\Gpec\WsdlToPhp\StructType\GetMailsFromRequest
     */
    protected \Bni\Gpec\WsdlToPhp\StructType\GetMailsFromRequest $GetMailsFromRequest;
    /**
     * Constructor method for getMailsFrom
     * @param \Bni\Gpec\WsdlToPhp\StructType\GetMailsFromRequest $getMailsFromRequest
     * @uses GetMailsFrom::setGetMailsFromRequest()
     */
    public function __construct(\Bni\Gpec\WsdlToPhp\StructType\GetMailsFromRequest $getMailsFromRequest)
    {
        $this
            ->setGetMailsFromRequest($getMailsFromRequest);
    }
    /**
     * Get GetMailsFromRequest value
     * @return \Bni\Gpec\WsdlToPhp\StructType\GetMailsFromRequest
     */
    public function getGetMailsFromRequest(): \Bni\Gpec\WsdlToPhp\StructType\GetMailsFromRequest
    {
        return $this->GetMailsFromRequest;
    }
    /**
     * Set GetMailsFromRequest value
     * @param \Bni\Gpec\WsdlToPhp\StructType\GetMailsFromRequest $getMailsFromRequest
     * @return \Bni\Gpec\WsdlToPhp\StructType\GetMailsFrom
     */
    public function setGetMailsFromRequest(\Bni\Gpec\WsdlToPhp\StructType\GetMailsFromRequest $getMailsFromRequest): self
    {
        $this->GetMailsFromRequest = $getMailsFromRequest;

        return $this;
    }
}
