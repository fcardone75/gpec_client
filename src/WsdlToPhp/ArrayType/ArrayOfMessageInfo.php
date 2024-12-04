<?php

declare(strict_types=1);

namespace Bni\Gpec\WsdlToPhp\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfMessageInfo ArrayType
 * @subpackage Arrays
 */
class ArrayOfMessageInfo extends AbstractStructArrayBase
{
    /**
     * The MessageInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Bni\Gpec\WsdlToPhp\StructType\MessageInfo[]|null
     */
    protected ?array $MessageInfo = null;
    /**
     * Constructor method for ArrayOfMessageInfo
     * @param \Bni\Gpec\WsdlToPhp\StructType\MessageInfo[] $messageInfo
     * @uses ArrayOfMessageInfo::setMessageInfo()
     */
    public function __construct(?array $messageInfo = null)
    {
        $this
            ->setMessageInfo($messageInfo);
    }
    /**
     * Get MessageInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Bni\Gpec\WsdlToPhp\StructType\MessageInfo[]|null
     */
    public function getMessageInfo(): ?array
    {
        return $this->MessageInfo ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMessageInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMessageInfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMessageInfoForArrayConstraintFromSetMessageInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfMessageInfoMessageInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfMessageInfoMessageInfoItem instanceof \Bni\Gpec\WsdlToPhp\StructType\MessageInfo) {
                $invalidValues[] = is_object($arrayOfMessageInfoMessageInfoItem) ? get_class($arrayOfMessageInfoMessageInfoItem) : sprintf('%s(%s)', gettype($arrayOfMessageInfoMessageInfoItem), var_export($arrayOfMessageInfoMessageInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MessageInfo property can only contain items of type \Bni\Gpec\WsdlToPhp\StructType\MessageInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }
    /**
     * Set MessageInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Bni\Gpec\WsdlToPhp\StructType\MessageInfo[] $messageInfo
     * @return \Bni\Gpec\WsdlToPhp\ArrayType\ArrayOfMessageInfo
     *@throws InvalidArgumentException
     */
    public function setMessageInfo(?array $messageInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($messageInfoArrayErrorMessage = self::validateMessageInfoForArrayConstraintFromSetMessageInfo($messageInfo))) {
            throw new InvalidArgumentException($messageInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($messageInfo) || (is_array($messageInfo) && empty($messageInfo))) {
            unset($this->MessageInfo);
        } else {
            $this->MessageInfo = $messageInfo;
        }

        return $this;
    }
    /**
     * Returns the current element
     * @return \Bni\Gpec\WsdlToPhp\StructType\MessageInfo|null
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Bni\Gpec\WsdlToPhp\StructType\MessageInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @param int $index
     * @return \Bni\Gpec\WsdlToPhp\StructType\MessageInfo|null
     * @see AbstractStructArrayBase::item()
     */
    public function item($index): ?\Bni\Gpec\WsdlToPhp\StructType\MessageInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @return \Bni\Gpec\WsdlToPhp\StructType\MessageInfo|null
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Bni\Gpec\WsdlToPhp\StructType\MessageInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @return \Bni\Gpec\WsdlToPhp\StructType\MessageInfo|null
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Bni\Gpec\WsdlToPhp\StructType\MessageInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @param int $offset
     * @return \Bni\Gpec\WsdlToPhp\StructType\MessageInfo|null
     *@see AbstractStructArrayBase::offsetGet()
     */
    public function offsetGet($offset): ?\Bni\Gpec\WsdlToPhp\StructType\MessageInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @param \Bni\Gpec\WsdlToPhp\StructType\MessageInfo $item
     * @return \Bni\Gpec\WsdlToPhp\ArrayType\ArrayOfMessageInfo
     * @throws InvalidArgumentException
     * @see AbstractStructArrayBase::add()
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Bni\Gpec\WsdlToPhp\StructType\MessageInfo) {
            throw new InvalidArgumentException(sprintf('The MessageInfo property can only contain items of type \Bni\Gpec\WsdlToPhp\StructType\MessageInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string MessageInfo
     */
    public function getAttributeName(): string
    {
        return 'MessageInfo';
    }
}
