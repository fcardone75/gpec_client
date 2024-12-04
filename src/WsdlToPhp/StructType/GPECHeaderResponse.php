<?php

declare(strict_types=1);

namespace Bni\Gpec\WsdlToPhp\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GPECHeaderResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GPECHeaderResponse extends AbstractStructBase
{
    /**
     * The operationResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \Bni\Gpec\WsdlToPhp\StructType\OperationResult|null
     */
    protected ?\Bni\Gpec\WsdlToPhp\StructType\OperationResult $operationResult;
    /**
     * Constructor method for GPECHeaderResponse
     * @param \Bni\Gpec\WsdlToPhp\StructType\OperationResult $operationResult
     * @uses GPECHeaderResponse::setOperationResult()
     */
    public function __construct(?\Bni\Gpec\WsdlToPhp\StructType\OperationResult $operationResult)
    {
        $this
            ->setOperationResult($operationResult);
    }
    /**
     * Get operationResult value
     * @return \Bni\Gpec\WsdlToPhp\StructType\OperationResult|null
     */
    public function getOperationResult(): ?\Bni\Gpec\WsdlToPhp\StructType\OperationResult
    {
        return $this->operationResult;
    }
    /**
     * Set operationResult value
     * @param \Bni\Gpec\WsdlToPhp\StructType\OperationResult $operationResult
     * @return \Bni\Gpec\WsdlToPhp\StructType\GPECHeaderResponse
     */
    public function setOperationResult(?\Bni\Gpec\WsdlToPhp\StructType\OperationResult $operationResult): self
    {
        $this->operationResult = $operationResult;

        return $this;
    }
}
