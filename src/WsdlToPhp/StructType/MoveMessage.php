<?php

declare(strict_types=1);

namespace Bni\Gpec\WsdlToPhp\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for moveMessage StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MoveMessage extends AbstractStructBase
{
    /**
     * The moveMessageRequest
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: s1:moveMessageRequest
     * @var \Bni\Gpec\WsdlToPhp\StructType\MoveMessageRequest
     */
    protected \Bni\Gpec\WsdlToPhp\StructType\MoveMessageRequest $moveMessageRequest;
    /**
     * Constructor method for moveMessage
     * @param \Bni\Gpec\WsdlToPhp\StructType\MoveMessageRequest $moveMessageRequest
     * @uses MoveMessage::setMoveMessageRequest()
     */
    public function __construct(\Bni\Gpec\WsdlToPhp\StructType\MoveMessageRequest $moveMessageRequest)
    {
        $this
            ->setMoveMessageRequest($moveMessageRequest);
    }
    /**
     * Get moveMessageRequest value
     * @return \Bni\Gpec\WsdlToPhp\StructType\MoveMessageRequest
     */
    public function getMoveMessageRequest(): \Bni\Gpec\WsdlToPhp\StructType\MoveMessageRequest
    {
        return $this->moveMessageRequest;
    }
    /**
     * Set moveMessageRequest value
     * @param \Bni\Gpec\WsdlToPhp\StructType\MoveMessageRequest $moveMessageRequest
     * @return \Bni\Gpec\WsdlToPhp\StructType\MoveMessage
     */
    public function setMoveMessageRequest(\Bni\Gpec\WsdlToPhp\StructType\MoveMessageRequest $moveMessageRequest): self
    {
        $this->moveMessageRequest = $moveMessageRequest;

        return $this;
    }
}
