<?php

declare(strict_types=1);

namespace Bni\Gpec\WsdlToPhp\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getMailsToResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMailsToResponse extends AbstractStructBase
{
    /**
     * The GetMailsToResponse
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: s5:GetMailsToResponse
     * @var \Bni\Gpec\WsdlToPhp\StructType\GetMailsToResponse_1|null
     */
    protected ?\Bni\Gpec\WsdlToPhp\StructType\GetMailsToResponse_1 $GetMailsToResponse = null;
    /**
     * Constructor method for getMailsToResponse
     * @param \Bni\Gpec\WsdlToPhp\StructType\GetMailsToResponse_1 $getMailsToResponse
     * @uses GetMailsToResponse::setGetMailsToResponse()
     */
    public function __construct(?\Bni\Gpec\WsdlToPhp\StructType\GetMailsToResponse_1 $getMailsToResponse = null)
    {
        $this
            ->setGetMailsToResponse($getMailsToResponse);
    }
    /**
     * Get GetMailsToResponse value
     * @return \Bni\Gpec\WsdlToPhp\StructType\GetMailsToResponse_1|null
     */
    public function getGetMailsToResponse(): ?\Bni\Gpec\WsdlToPhp\StructType\GetMailsToResponse_1
    {
        return $this->GetMailsToResponse;
    }
    /**
     * Set GetMailsToResponse value
     * @param \Bni\Gpec\WsdlToPhp\StructType\GetMailsToResponse_1 $getMailsToResponse
     * @return \Bni\Gpec\WsdlToPhp\StructType\GetMailsToResponse
     */
    public function setGetMailsToResponse(?\Bni\Gpec\WsdlToPhp\StructType\GetMailsToResponse_1 $getMailsToResponse = null): self
    {
        $this->GetMailsToResponse = $getMailsToResponse;

        return $this;
    }
}
