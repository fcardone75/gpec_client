<?php

declare(strict_types=1);

namespace Bni\Gpec\WsdlToPhp\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getMailsAndReceipts StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMailsAndReceipts extends AbstractStructBase
{
    /**
     * The GetMailsAndReceiptsRequest
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: s1:GetMailsAndReceiptsRequest
     * @var \Bni\Gpec\WsdlToPhp\StructType\GetMailsAndReceiptsRequest
     */
    protected \Bni\Gpec\WsdlToPhp\StructType\GetMailsAndReceiptsRequest $GetMailsAndReceiptsRequest;
    /**
     * Constructor method for getMailsAndReceipts
     * @param \Bni\Gpec\WsdlToPhp\StructType\GetMailsAndReceiptsRequest $getMailsAndReceiptsRequest
     * @uses GetMailsAndReceipts::setGetMailsAndReceiptsRequest()
     */
    public function __construct(\Bni\Gpec\WsdlToPhp\StructType\GetMailsAndReceiptsRequest $getMailsAndReceiptsRequest)
    {
        $this
            ->setGetMailsAndReceiptsRequest($getMailsAndReceiptsRequest);
    }
    /**
     * Get GetMailsAndReceiptsRequest value
     * @return \Bni\Gpec\WsdlToPhp\StructType\GetMailsAndReceiptsRequest
     */
    public function getGetMailsAndReceiptsRequest(): \Bni\Gpec\WsdlToPhp\StructType\GetMailsAndReceiptsRequest
    {
        return $this->GetMailsAndReceiptsRequest;
    }
    /**
     * Set GetMailsAndReceiptsRequest value
     * @param \Bni\Gpec\WsdlToPhp\StructType\GetMailsAndReceiptsRequest $getMailsAndReceiptsRequest
     * @return \Bni\Gpec\WsdlToPhp\StructType\GetMailsAndReceipts
     */
    public function setGetMailsAndReceiptsRequest(\Bni\Gpec\WsdlToPhp\StructType\GetMailsAndReceiptsRequest $getMailsAndReceiptsRequest): self
    {
        $this->GetMailsAndReceiptsRequest = $getMailsAndReceiptsRequest;

        return $this;
    }
}
