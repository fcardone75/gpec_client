<?php

declare(strict_types=1);

namespace Bni\Gpec\WsdlToPhp\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getMailsRangeResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMailsRangeResponse extends AbstractStructBase
{
    /**
     * The GetMailsFromDateToDateResponse
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: s5:GetMailsFromDateToDateResponse
     * @var \Bni\Gpec\WsdlToPhp\StructType\GetMailsRangeResponse_1|null
     */
    protected ?\Bni\Gpec\WsdlToPhp\StructType\GetMailsRangeResponse_1 $GetMailsFromDateToDateResponse = null;
    /**
     * Constructor method for getMailsRangeResponse
     * @param \Bni\Gpec\WsdlToPhp\StructType\GetMailsRangeResponse_1 $getMailsFromDateToDateResponse
     * @uses GetMailsRangeResponse::setGetMailsFromDateToDateResponse()
     */
    public function __construct(?\Bni\Gpec\WsdlToPhp\StructType\GetMailsRangeResponse_1 $getMailsFromDateToDateResponse = null)
    {
        $this
            ->setGetMailsFromDateToDateResponse($getMailsFromDateToDateResponse);
    }
    /**
     * Get GetMailsFromDateToDateResponse value
     * @return \Bni\Gpec\WsdlToPhp\StructType\GetMailsRangeResponse_1|null
     */
    public function getGetMailsFromDateToDateResponse(): ?\Bni\Gpec\WsdlToPhp\StructType\GetMailsRangeResponse_1
    {
        return $this->GetMailsFromDateToDateResponse;
    }
    /**
     * Set GetMailsFromDateToDateResponse value
     * @param \Bni\Gpec\WsdlToPhp\StructType\GetMailsRangeResponse_1 $getMailsFromDateToDateResponse
     * @return \Bni\Gpec\WsdlToPhp\StructType\GetMailsRangeResponse
     */
    public function setGetMailsFromDateToDateResponse(?\Bni\Gpec\WsdlToPhp\StructType\GetMailsRangeResponse_1 $getMailsFromDateToDateResponse = null): self
    {
        $this->GetMailsFromDateToDateResponse = $getMailsFromDateToDateResponse;

        return $this;
    }
}
