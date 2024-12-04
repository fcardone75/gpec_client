<?php

declare(strict_types=1);

namespace Bni\Gpec\WsdlToPhp\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getVersionResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetVersionResponse extends AbstractStructBase
{
    /**
     * The getVersionResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $getVersionResult = null;
    /**
     * Constructor method for getVersionResponse
     * @uses GetVersionResponse::setGetVersionResult()
     * @param string $getVersionResult
     */
    public function __construct(?string $getVersionResult = null)
    {
        $this
            ->setGetVersionResult($getVersionResult);
    }
    /**
     * Get getVersionResult value
     * @return string|null
     */
    public function getGetVersionResult(): ?string
    {
        return $this->getVersionResult;
    }
    /**
     * Set getVersionResult value
     * @param string $getVersionResult
     * @return \Bni\Gpec\WsdlToPhp\StructType\GetVersionResponse
     */
    public function setGetVersionResult(?string $getVersionResult = null): self
    {
        // validation for constraint: string
        if (!is_null($getVersionResult) && !is_string($getVersionResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($getVersionResult, true), gettype($getVersionResult)), __LINE__);
        }
        $this->getVersionResult = $getVersionResult;
        
        return $this;
    }
}
