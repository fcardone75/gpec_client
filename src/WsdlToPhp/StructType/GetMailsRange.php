<?php

declare(strict_types=1);

namespace Bni\Gpec\WsdlToPhp\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getMailsRange StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMailsRange extends AbstractStructBase
{
    /**
     * The GetMailsFromDateToDateRequest
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: s1:GetMailsFromDateToDateRequest
     * @var \Bni\Gpec\WsdlToPhp\StructType\GetMailsRangeRequest
     */
    protected \Bni\Gpec\WsdlToPhp\StructType\GetMailsRangeRequest $GetMailsFromDateToDateRequest;
    /**
     * Constructor method for getMailsRange
     * @param \Bni\Gpec\WsdlToPhp\StructType\GetMailsRangeRequest $getMailsFromDateToDateRequest
     * @uses GetMailsRange::setGetMailsFromDateToDateRequest()
     */
    public function __construct(\Bni\Gpec\WsdlToPhp\StructType\GetMailsRangeRequest $getMailsFromDateToDateRequest)
    {
        $this
            ->setGetMailsFromDateToDateRequest($getMailsFromDateToDateRequest);
    }
    /**
     * Get GetMailsFromDateToDateRequest value
     * @return \Bni\Gpec\WsdlToPhp\StructType\GetMailsRangeRequest
     */
    public function getGetMailsFromDateToDateRequest(): \Bni\Gpec\WsdlToPhp\StructType\GetMailsRangeRequest
    {
        return $this->GetMailsFromDateToDateRequest;
    }
    /**
     * Set GetMailsFromDateToDateRequest value
     * @param \Bni\Gpec\WsdlToPhp\StructType\GetMailsRangeRequest $getMailsFromDateToDateRequest
     * @return \Bni\Gpec\WsdlToPhp\StructType\GetMailsRange
     */
    public function setGetMailsFromDateToDateRequest(\Bni\Gpec\WsdlToPhp\StructType\GetMailsRangeRequest $getMailsFromDateToDateRequest): self
    {
        $this->GetMailsFromDateToDateRequest = $getMailsFromDateToDateRequest;

        return $this;
    }
}
