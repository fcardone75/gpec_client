<?php

declare(strict_types=1);

namespace Bni\Gpec\WsdlToPhp\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getMailByIdResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMailByIdResponse extends AbstractStructBase
{
    /**
     * The GetMailByIdResponse
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: s5:GetMailByIdResponse
     * @var \Bni\Gpec\WsdlToPhp\StructType\GetMailByIdResponse_1|null
     */
    protected ?\Bni\Gpec\WsdlToPhp\StructType\GetMailByIdResponse_1 $GetMailByIdResponse = null;
    /**
     * Constructor method for getMailByIdResponse
     * @param \Bni\Gpec\WsdlToPhp\StructType\GetMailByIdResponse_1 $getMailByIdResponse
     * @uses GetMailByIdResponse::setGetMailByIdResponse()
     */
    public function __construct(?\Bni\Gpec\WsdlToPhp\StructType\GetMailByIdResponse_1 $getMailByIdResponse = null)
    {
        $this
            ->setGetMailByIdResponse($getMailByIdResponse);
    }
    /**
     * Get GetMailByIdResponse value
     * @return \Bni\Gpec\WsdlToPhp\StructType\GetMailByIdResponse_1|null
     */
    public function getGetMailByIdResponse(): ?\Bni\Gpec\WsdlToPhp\StructType\GetMailByIdResponse_1
    {
        return $this->GetMailByIdResponse;
    }
    /**
     * Set GetMailByIdResponse value
     * @param \Bni\Gpec\WsdlToPhp\StructType\GetMailByIdResponse_1 $getMailByIdResponse
     * @return \Bni\Gpec\WsdlToPhp\StructType\GetMailByIdResponse
     */
    public function setGetMailByIdResponse(?\Bni\Gpec\WsdlToPhp\StructType\GetMailByIdResponse_1 $getMailByIdResponse = null): self
    {
        $this->GetMailByIdResponse = $getMailByIdResponse;

        return $this;
    }
}
