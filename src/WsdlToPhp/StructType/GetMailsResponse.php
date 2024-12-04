<?php

declare(strict_types=1);

namespace Bni\Gpec\WsdlToPhp\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getMailsResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMailsResponse extends AbstractStructBase
{
    /**
     * The GetMailsResponse
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: s5:GetMailsResponse
     * @var \Bni\Gpec\WsdlToPhp\StructType\GetMailsResponse_1|null
     */
    protected ?\Bni\Gpec\WsdlToPhp\StructType\GetMailsResponse_1 $GetMailsResponse = null;
    /**
     * Constructor method for getMailsResponse
     * @param \Bni\Gpec\WsdlToPhp\StructType\GetMailsResponse_1 $getMailsResponse
     * @uses GetMailsResponse::setGetMailsResponse()
     */
    public function __construct(?\Bni\Gpec\WsdlToPhp\StructType\GetMailsResponse_1 $getMailsResponse = null)
    {
        $this
            ->setGetMailsResponse($getMailsResponse);
    }
    /**
     * Get GetMailsResponse value
     * @return \Bni\Gpec\WsdlToPhp\StructType\GetMailsResponse_1|null
     */
    public function getGetMailsResponse(): ?\Bni\Gpec\WsdlToPhp\StructType\GetMailsResponse_1
    {
        return $this->GetMailsResponse;
    }
    /**
     * Set GetMailsResponse value
     * @param \Bni\Gpec\WsdlToPhp\StructType\GetMailsResponse_1 $getMailsResponse
     * @return \Bni\Gpec\WsdlToPhp\StructType\GetMailsResponse
     */
    public function setGetMailsResponse(?\Bni\Gpec\WsdlToPhp\StructType\GetMailsResponse_1 $getMailsResponse = null): self
    {
        $this->GetMailsResponse = $getMailsResponse;

        return $this;
    }
}
