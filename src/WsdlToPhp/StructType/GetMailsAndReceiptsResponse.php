<?php

declare(strict_types=1);

namespace Bni\Gpec\WsdlToPhp\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getMailsAndReceiptsResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMailsAndReceiptsResponse extends AbstractStructBase
{
    /**
     * The GetMailsAndReceiptsResponse
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: s5:GetMailsAndReceiptsResponse
     * @var \Bni\Gpec\WsdlToPhp\StructType\GetMailsAndReceiptsResponse_1|null
     */
    protected ?\Bni\Gpec\WsdlToPhp\StructType\GetMailsAndReceiptsResponse_1 $GetMailsAndReceiptsResponse = null;
    /**
     * Constructor method for getMailsAndReceiptsResponse
     * @param \Bni\Gpec\WsdlToPhp\StructType\GetMailsAndReceiptsResponse_1 $getMailsAndReceiptsResponse
     * @uses GetMailsAndReceiptsResponse::setGetMailsAndReceiptsResponse()
     */
    public function __construct(?\Bni\Gpec\WsdlToPhp\StructType\GetMailsAndReceiptsResponse_1 $getMailsAndReceiptsResponse = null)
    {
        $this
            ->setGetMailsAndReceiptsResponse($getMailsAndReceiptsResponse);
    }
    /**
     * Get GetMailsAndReceiptsResponse value
     * @return \Bni\Gpec\WsdlToPhp\StructType\GetMailsAndReceiptsResponse_1|null
     */
    public function getGetMailsAndReceiptsResponse(): ?\Bni\Gpec\WsdlToPhp\StructType\GetMailsAndReceiptsResponse_1
    {
        return $this->GetMailsAndReceiptsResponse;
    }
    /**
     * Set GetMailsAndReceiptsResponse value
     * @param \Bni\Gpec\WsdlToPhp\StructType\GetMailsAndReceiptsResponse_1 $getMailsAndReceiptsResponse
     * @return \Bni\Gpec\WsdlToPhp\StructType\GetMailsAndReceiptsResponse
     */
    public function setGetMailsAndReceiptsResponse(?\Bni\Gpec\WsdlToPhp\StructType\GetMailsAndReceiptsResponse_1 $getMailsAndReceiptsResponse = null): self
    {
        $this->GetMailsAndReceiptsResponse = $getMailsAndReceiptsResponse;

        return $this;
    }
}
