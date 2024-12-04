<?php

declare(strict_types=1);

namespace Bni\Gpec\WsdlToPhp\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getMailById StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMailById extends AbstractStructBase
{
    /**
     * The GetMailByIdRequest
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: s1:GetMailByIdRequest
     * @var \Bni\Gpec\WsdlToPhp\StructType\GetMailByIdRequest
     */
    protected \Bni\Gpec\WsdlToPhp\StructType\GetMailByIdRequest $GetMailByIdRequest;
    /**
     * Constructor method for getMailById
     * @param \Bni\Gpec\WsdlToPhp\StructType\GetMailByIdRequest $getMailByIdRequest
     * @uses GetMailById::setGetMailByIdRequest()
     */
    public function __construct(\Bni\Gpec\WsdlToPhp\StructType\GetMailByIdRequest $getMailByIdRequest)
    {
        $this
            ->setGetMailByIdRequest($getMailByIdRequest);
    }
    /**
     * Get GetMailByIdRequest value
     * @return \Bni\Gpec\WsdlToPhp\StructType\GetMailByIdRequest
     */
    public function getGetMailByIdRequest(): \Bni\Gpec\WsdlToPhp\StructType\GetMailByIdRequest
    {
        return $this->GetMailByIdRequest;
    }
    /**
     * Set GetMailByIdRequest value
     * @param \Bni\Gpec\WsdlToPhp\StructType\GetMailByIdRequest $getMailByIdRequest
     * @return \Bni\Gpec\WsdlToPhp\StructType\GetMailById
     */
    public function setGetMailByIdRequest(\Bni\Gpec\WsdlToPhp\StructType\GetMailByIdRequest $getMailByIdRequest): self
    {
        $this->GetMailByIdRequest = $getMailByIdRequest;

        return $this;
    }
}
