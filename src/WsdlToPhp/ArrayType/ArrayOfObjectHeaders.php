<?php

declare(strict_types=1);

namespace Bni\Gpec\WsdlToPhp\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfObjectHeaders ArrayType
 * @subpackage Arrays
 */
class ArrayOfObjectHeaders extends AbstractStructArrayBase
{
    /**
     * The ObjectHeaders
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Bni\Gpec\WsdlToPhp\StructType\ObjectHeaders[]|null
     */
    protected ?array $ObjectHeaders = null;
    /**
     * Constructor method for ArrayOfObjectHeaders
     * @param \Bni\Gpec\WsdlToPhp\StructType\ObjectHeaders[] $objectHeaders
     * @uses ArrayOfObjectHeaders::setObjectHeaders()
     */
    public function __construct(?array $objectHeaders = null)
    {
        $this
            ->setObjectHeaders($objectHeaders);
    }
    /**
     * Get ObjectHeaders value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Bni\Gpec\WsdlToPhp\StructType\ObjectHeaders[]|null
     */
    public function getObjectHeaders(): ?array
    {
        return $this->ObjectHeaders ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setObjectHeaders method
     * This method is willingly generated in order to preserve the one-line inline validation within the setObjectHeaders method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateObjectHeadersForArrayConstraintFromSetObjectHeaders(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfObjectHeadersObjectHeadersItem) {
            // validation for constraint: itemType
            if (!$arrayOfObjectHeadersObjectHeadersItem instanceof \Bni\Gpec\WsdlToPhp\StructType\ObjectHeaders) {
                $invalidValues[] = is_object($arrayOfObjectHeadersObjectHeadersItem) ? get_class($arrayOfObjectHeadersObjectHeadersItem) : sprintf('%s(%s)', gettype($arrayOfObjectHeadersObjectHeadersItem), var_export($arrayOfObjectHeadersObjectHeadersItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ObjectHeaders property can only contain items of type \Bni\Gpec\WsdlToPhp\StructType\ObjectHeaders, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }
    /**
     * Set ObjectHeaders value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Bni\Gpec\WsdlToPhp\StructType\ObjectHeaders[] $objectHeaders
     * @return \Bni\Gpec\WsdlToPhp\ArrayType\ArrayOfObjectHeaders
     *@throws InvalidArgumentException
     */
    public function setObjectHeaders(?array $objectHeaders = null): self
    {
        // validation for constraint: array
        if ('' !== ($objectHeadersArrayErrorMessage = self::validateObjectHeadersForArrayConstraintFromSetObjectHeaders($objectHeaders))) {
            throw new InvalidArgumentException($objectHeadersArrayErrorMessage, __LINE__);
        }
        if (is_null($objectHeaders) || (is_array($objectHeaders) && empty($objectHeaders))) {
            unset($this->ObjectHeaders);
        } else {
            $this->ObjectHeaders = $objectHeaders;
        }

        return $this;
    }
    /**
     * Returns the current element
     * @return \Bni\Gpec\WsdlToPhp\StructType\ObjectHeaders|null
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Bni\Gpec\WsdlToPhp\StructType\ObjectHeaders
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @param int $index
     * @return \Bni\Gpec\WsdlToPhp\StructType\ObjectHeaders|null
     * @see AbstractStructArrayBase::item()
     */
    public function item($index): ?\Bni\Gpec\WsdlToPhp\StructType\ObjectHeaders
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @return \Bni\Gpec\WsdlToPhp\StructType\ObjectHeaders|null
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Bni\Gpec\WsdlToPhp\StructType\ObjectHeaders
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @return \Bni\Gpec\WsdlToPhp\StructType\ObjectHeaders|null
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Bni\Gpec\WsdlToPhp\StructType\ObjectHeaders
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @param int $offset
     * @return \Bni\Gpec\WsdlToPhp\StructType\ObjectHeaders|null
     * @see AbstractStructArrayBase::offsetGet()
     */
    public function offsetGet($offset): ?\Bni\Gpec\WsdlToPhp\StructType\ObjectHeaders
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @param \Bni\Gpec\WsdlToPhp\StructType\ObjectHeaders $item
     * @return \Bni\Gpec\WsdlToPhp\ArrayType\ArrayOfObjectHeaders
     *@throws InvalidArgumentException
     * @see AbstractStructArrayBase::add()
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Bni\Gpec\WsdlToPhp\StructType\ObjectHeaders) {
            throw new InvalidArgumentException(sprintf('The ObjectHeaders property can only contain items of type \Bni\Gpec\WsdlToPhp\StructType\ObjectHeaders, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ObjectHeaders
     */
    public function getAttributeName(): string
    {
        return 'ObjectHeaders';
    }
}
