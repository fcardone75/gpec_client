<?php

declare(strict_types=1);

namespace Bni\Gpec\WsdlToPhp\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAttachment ArrayType
 * @subpackage Arrays
 */
class ArrayOfAttachment extends AbstractStructArrayBase
{
    /**
     * The Attachment
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Bni\Gpec\WsdlToPhp\StructType\Attachment[]|null
     */
    protected ?array $Attachment = null;
    /**
     * Constructor method for ArrayOfAttachment
     * @param \Bni\Gpec\WsdlToPhp\StructType\Attachment[] $attachment
     * @uses ArrayOfAttachment::setAttachment()
     */
    public function __construct(?array $attachment = null)
    {
        $this
            ->setAttachment($attachment);
    }
    /**
     * Get Attachment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Bni\Gpec\WsdlToPhp\StructType\Attachment[]|null
     */
    public function getAttachment(): ?array
    {
        return $this->Attachment ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setAttachment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAttachment method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAttachmentForArrayConstraintFromSetAttachment(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfAttachmentAttachmentItem) {
            // validation for constraint: itemType
            if (!$arrayOfAttachmentAttachmentItem instanceof \Bni\Gpec\WsdlToPhp\StructType\Attachment) {
                $invalidValues[] = is_object($arrayOfAttachmentAttachmentItem) ? get_class($arrayOfAttachmentAttachmentItem) : sprintf('%s(%s)', gettype($arrayOfAttachmentAttachmentItem), var_export($arrayOfAttachmentAttachmentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Attachment property can only contain items of type \Bni\Gpec\WsdlToPhp\StructType\Attachment, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }
    /**
     * Set Attachment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Bni\Gpec\WsdlToPhp\StructType\Attachment[] $attachment
     * @return \Bni\Gpec\WsdlToPhp\ArrayType\ArrayOfAttachment
     *@throws InvalidArgumentException
     */
    public function setAttachment(?array $attachment = null): self
    {
        // validation for constraint: array
        if ('' !== ($attachmentArrayErrorMessage = self::validateAttachmentForArrayConstraintFromSetAttachment($attachment))) {
            throw new InvalidArgumentException($attachmentArrayErrorMessage, __LINE__);
        }
        if (is_null($attachment) || (is_array($attachment) && empty($attachment))) {
            unset($this->Attachment);
        } else {
            $this->Attachment = $attachment;
        }

        return $this;
    }
    /**
     * Returns the current element
     * @return \Bni\Gpec\WsdlToPhp\StructType\Attachment|null
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Bni\Gpec\WsdlToPhp\StructType\Attachment
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @param int $index
     * @return \Bni\Gpec\WsdlToPhp\StructType\Attachment|null
     * @see AbstractStructArrayBase::item()
     */
    public function item($index): ?\Bni\Gpec\WsdlToPhp\StructType\Attachment
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @return \Bni\Gpec\WsdlToPhp\StructType\Attachment|null
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Bni\Gpec\WsdlToPhp\StructType\Attachment
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @return \Bni\Gpec\WsdlToPhp\StructType\Attachment|null
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Bni\Gpec\WsdlToPhp\StructType\Attachment
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @param int $offset
     * @return \Bni\Gpec\WsdlToPhp\StructType\Attachment|null
     *@see AbstractStructArrayBase::offsetGet()
     */
    public function offsetGet($offset): ?\Bni\Gpec\WsdlToPhp\StructType\Attachment
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @param \Bni\Gpec\WsdlToPhp\StructType\Attachment $item
     * @return \Bni\Gpec\WsdlToPhp\ArrayType\ArrayOfAttachment
     * @throws InvalidArgumentException
     * @see AbstractStructArrayBase::add()
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Bni\Gpec\WsdlToPhp\StructType\Attachment) {
            throw new InvalidArgumentException(sprintf('The Attachment property can only contain items of type \Bni\Gpec\WsdlToPhp\StructType\Attachment, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Attachment
     */
    public function getAttributeName(): string
    {
        return 'Attachment';
    }
}
