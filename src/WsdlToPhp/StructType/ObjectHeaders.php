<?php

declare(strict_types=1);

namespace Bni\Gpec\WsdlToPhp\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ObjectHeaders StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ObjectHeaders extends AbstractStructBase
{
    /**
     * The key
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string|null
     */
    protected ?string $key;
    /**
     * The value
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string|null
     */
    protected ?string $value;
    /**
     * Constructor method for ObjectHeaders
     * @uses ObjectHeaders::setKey()
     * @uses ObjectHeaders::setValue()
     * @param string $key
     * @param string $value
     */
    public function __construct(?string $key, ?string $value)
    {
        $this
            ->setKey($key)
            ->setValue($value);
    }
    /**
     * Get key value
     * @return string|null
     */
    public function getKey(): ?string
    {
        return $this->key;
    }
    /**
     * Set key value
     * @param string $key
     * @return \Bni\Gpec\WsdlToPhp\StructType\ObjectHeaders
     */
    public function setKey(?string $key): self
    {
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($key, true), gettype($key)), __LINE__);
        }
        $this->key = $key;
        
        return $this;
    }
    /**
     * Get value value
     * @return string|null
     */
    public function getValue(): ?string
    {
        return $this->value;
    }
    /**
     * Set value value
     * @param string $value
     * @return \Bni\Gpec\WsdlToPhp\StructType\ObjectHeaders
     */
    public function setValue(?string $value): self
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        $this->value = $value;
        
        return $this;
    }
}
