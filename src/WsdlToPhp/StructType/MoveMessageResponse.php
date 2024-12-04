<?php

declare(strict_types=1);

namespace Bni\Gpec\WsdlToPhp\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for moveMessageResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MoveMessageResponse extends AbstractStructBase
{
    /**
     * The MoveMessageResponse
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: s5:MoveMessageResponse
     * @var \Bni\Gpec\WsdlToPhp\StructType\MoveMessageResponse_1
     */
    protected \Bni\Gpec\WsdlToPhp\StructType\MoveMessageResponse_1 $MoveMessageResponse;
    /**
     * Constructor method for moveMessageResponse
     * @param \Bni\Gpec\WsdlToPhp\StructType\MoveMessageResponse_1 $moveMessageResponse
     * @uses MoveMessageResponse::setMoveMessageResponse()
     */
    public function __construct(\Bni\Gpec\WsdlToPhp\StructType\MoveMessageResponse_1 $moveMessageResponse)
    {
        $this
            ->setMoveMessageResponse($moveMessageResponse);
    }
    /**
     * Get MoveMessageResponse value
     * @return \Bni\Gpec\WsdlToPhp\StructType\MoveMessageResponse_1
     */
    public function getMoveMessageResponse(): \Bni\Gpec\WsdlToPhp\StructType\MoveMessageResponse_1
    {
        return $this->MoveMessageResponse;
    }
    /**
     * Set MoveMessageResponse value
     * @param \Bni\Gpec\WsdlToPhp\StructType\MoveMessageResponse_1 $moveMessageResponse
     * @return \Bni\Gpec\WsdlToPhp\StructType\MoveMessageResponse
     */
    public function setMoveMessageResponse(\Bni\Gpec\WsdlToPhp\StructType\MoveMessageResponse_1 $moveMessageResponse): self
    {
        $this->MoveMessageResponse = $moveMessageResponse;

        return $this;
    }
}
