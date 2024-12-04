<?php

declare(strict_types=1);

namespace Bni\Gpec\WsdlToPhp\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for deleteMailResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteMailResponse extends AbstractStructBase
{
    /**
     * The DeleteMailResponse
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: s5:DeleteMailResponse
     * @var \Bni\Gpec\WsdlToPhp\StructType\DeleteMailResponse_1
     */
    protected \Bni\Gpec\WsdlToPhp\StructType\DeleteMailResponse_1 $DeleteMailResponse;
    /**
     * Constructor method for deleteMailResponse
     * @param \Bni\Gpec\WsdlToPhp\StructType\DeleteMailResponse_1 $deleteMailResponse
     * @uses DeleteMailResponse::setDeleteMailResponse()
     */
    public function __construct(\Bni\Gpec\WsdlToPhp\StructType\DeleteMailResponse_1 $deleteMailResponse)
    {
        $this
            ->setDeleteMailResponse($deleteMailResponse);
    }
    /**
     * Get DeleteMailResponse value
     * @return \Bni\Gpec\WsdlToPhp\StructType\DeleteMailResponse_1
     */
    public function getDeleteMailResponse(): \Bni\Gpec\WsdlToPhp\StructType\DeleteMailResponse_1
    {
        return $this->DeleteMailResponse;
    }
    /**
     * Set DeleteMailResponse value
     * @param \Bni\Gpec\WsdlToPhp\StructType\DeleteMailResponse_1 $deleteMailResponse
     * @return \Bni\Gpec\WsdlToPhp\StructType\DeleteMailResponse
     */
    public function setDeleteMailResponse(\Bni\Gpec\WsdlToPhp\StructType\DeleteMailResponse_1 $deleteMailResponse): self
    {
        $this->DeleteMailResponse = $deleteMailResponse;

        return $this;
    }
}
