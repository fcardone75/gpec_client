<?php

declare(strict_types=1);

namespace Bni\Gpec\WsdlToPhp\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getMailsFromResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMailsFromResponse extends AbstractStructBase
{
    /**
     * The GetMailsFromResponse
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: s5:GetMailsFromResponse
     * @var \Bni\Gpec\WsdlToPhp\StructType\GetMailsFromResponse_1|null
     */
    protected ?\Bni\Gpec\WsdlToPhp\StructType\GetMailsFromResponse_1 $GetMailsFromResponse = null;
    /**
     * Constructor method for getMailsFromResponse
     * @param \Bni\Gpec\WsdlToPhp\StructType\GetMailsFromResponse_1 $getMailsFromResponse
     * @uses GetMailsFromResponse::setGetMailsFromResponse()
     */
    public function __construct(?\Bni\Gpec\WsdlToPhp\StructType\GetMailsFromResponse_1 $getMailsFromResponse = null)
    {
        $this
            ->setGetMailsFromResponse($getMailsFromResponse);
    }
    /**
     * Get GetMailsFromResponse value
     * @return \Bni\Gpec\WsdlToPhp\StructType\GetMailsFromResponse_1|null
     */
    public function getGetMailsFromResponse(): ?\Bni\Gpec\WsdlToPhp\StructType\GetMailsFromResponse_1
    {
        return $this->GetMailsFromResponse;
    }
    /**
     * Set GetMailsFromResponse value
     * @param \Bni\Gpec\WsdlToPhp\StructType\GetMailsFromResponse_1 $getMailsFromResponse
     * @return \Bni\Gpec\WsdlToPhp\StructType\GetMailsFromResponse
     */
    public function setGetMailsFromResponse(?\Bni\Gpec\WsdlToPhp\StructType\GetMailsFromResponse_1 $getMailsFromResponse = null): self
    {
        $this->GetMailsFromResponse = $getMailsFromResponse;

        return $this;
    }
}
