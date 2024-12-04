<?php

declare(strict_types=1);

namespace Bni\Gpec\WsdlToPhp\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getMailsTo StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMailsTo extends AbstractStructBase
{
    /**
     * The GetMailToRequest
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: s1:GetMailToRequest
     * @var \Bni\Gpec\WsdlToPhp\StructType\GetMailsToRequest
     */
    protected \Bni\Gpec\WsdlToPhp\StructType\GetMailsToRequest $GetMailToRequest;
    /**
     * Constructor method for getMailsTo
     * @param \Bni\Gpec\WsdlToPhp\StructType\GetMailsToRequest $getMailToRequest
     * @uses GetMailsTo::setGetMailToRequest()
     */
    public function __construct(\Bni\Gpec\WsdlToPhp\StructType\GetMailsToRequest $getMailToRequest)
    {
        $this
            ->setGetMailToRequest($getMailToRequest);
    }
    /**
     * Get GetMailToRequest value
     * @return \Bni\Gpec\WsdlToPhp\StructType\GetMailsToRequest
     */
    public function getGetMailToRequest(): \Bni\Gpec\WsdlToPhp\StructType\GetMailsToRequest
    {
        return $this->GetMailToRequest;
    }
    /**
     * Set GetMailToRequest value
     * @param \Bni\Gpec\WsdlToPhp\StructType\GetMailsToRequest $getMailToRequest
     * @return \Bni\Gpec\WsdlToPhp\StructType\GetMailsTo
     */
    public function setGetMailToRequest(\Bni\Gpec\WsdlToPhp\StructType\GetMailsToRequest $getMailToRequest): self
    {
        $this->GetMailToRequest = $getMailToRequest;

        return $this;
    }
}
