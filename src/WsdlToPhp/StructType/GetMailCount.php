<?php

declare(strict_types=1);

namespace Bni\Gpec\WsdlToPhp\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getMailCount StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMailCount extends AbstractStructBase
{
    /**
     * The getMailCountRequest
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: s1:getMailCountRequest
     * @var \Bni\Gpec\WsdlToPhp\StructType\GetMailCountRequest
     */
    protected \Bni\Gpec\WsdlToPhp\StructType\GetMailCountRequest $getMailCountRequest;
    /**
     * Constructor method for getMailCount
     * @param \Bni\Gpec\WsdlToPhp\StructType\GetMailCountRequest $getMailCountRequest
     * @uses GetMailCount::setGetMailCountRequest()
     */
    public function __construct(\Bni\Gpec\WsdlToPhp\StructType\GetMailCountRequest $getMailCountRequest)
    {
        $this
            ->setGetMailCountRequest($getMailCountRequest);
    }
    /**
     * Get getMailCountRequest value
     * @return \Bni\Gpec\WsdlToPhp\StructType\GetMailCountRequest
     */
    public function getGetMailCountRequest(): \Bni\Gpec\WsdlToPhp\StructType\GetMailCountRequest
    {
        return $this->getMailCountRequest;
    }
    /**
     * Set getMailCountRequest value
     * @param \Bni\Gpec\WsdlToPhp\StructType\GetMailCountRequest $getMailCountRequest
     * @return \Bni\Gpec\WsdlToPhp\StructType\GetMailCount
     */
    public function setGetMailCountRequest(\Bni\Gpec\WsdlToPhp\StructType\GetMailCountRequest $getMailCountRequest): self
    {
        $this->getMailCountRequest = $getMailCountRequest;

        return $this;
    }
}
