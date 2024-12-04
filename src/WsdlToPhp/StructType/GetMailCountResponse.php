<?php

declare(strict_types=1);

namespace Bni\Gpec\WsdlToPhp\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getMailCountResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMailCountResponse extends AbstractStructBase
{
    /**
     * The GetMailCountResponse
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: s5:GetMailCountResponse
     * @var \Bni\Gpec\WsdlToPhp\StructType\GetMailCountResponse_1|null
     */
    protected ?\Bni\Gpec\WsdlToPhp\StructType\GetMailCountResponse_1 $GetMailCountResponse = null;
    /**
     * Constructor method for getMailCountResponse
     * @param \Bni\Gpec\WsdlToPhp\StructType\GetMailCountResponse_1 $getMailCountResponse
     * @uses GetMailCountResponse::setGetMailCountResponse()
     */
    public function __construct(?\Bni\Gpec\WsdlToPhp\StructType\GetMailCountResponse_1 $getMailCountResponse = null)
    {
        $this
            ->setGetMailCountResponse($getMailCountResponse);
    }
    /**
     * Get GetMailCountResponse value
     * @return \Bni\Gpec\WsdlToPhp\StructType\GetMailCountResponse_1|null
     */
    public function getGetMailCountResponse(): ?\Bni\Gpec\WsdlToPhp\StructType\GetMailCountResponse_1
    {
        return $this->GetMailCountResponse;
    }
    /**
     * Set GetMailCountResponse value
     * @param \Bni\Gpec\WsdlToPhp\StructType\GetMailCountResponse_1 $getMailCountResponse
     * @return \Bni\Gpec\WsdlToPhp\StructType\GetMailCountResponse
     */
    public function setGetMailCountResponse(?\Bni\Gpec\WsdlToPhp\StructType\GetMailCountResponse_1 $getMailCountResponse = null): self
    {
        $this->GetMailCountResponse = $getMailCountResponse;

        return $this;
    }
}
