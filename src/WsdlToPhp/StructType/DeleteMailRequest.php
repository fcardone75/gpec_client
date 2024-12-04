<?php

declare(strict_types=1);

namespace Bni\Gpec\WsdlToPhp\StructType;

use InvalidArgumentException;

/**
 * This class stands for DeleteMailRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteMailRequest extends BaseRequest
{
    /**
     * The typeOfElement
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $typeOfElement;
    /**
     * The id
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string|null
     */
    protected ?string $id;
    /**
     * Constructor method for DeleteMailRequest
     * @uses DeleteMailRequest::setTypeOfElement()
     * @uses DeleteMailRequest::setId()
     * @param string $typeOfElement
     * @param string $id
     */
    public function __construct(string $typeOfElement, ?string $id)
    {
        $this
            ->setTypeOfElement($typeOfElement)
            ->setId($id);
    }
    /**
     * Get typeOfElement value
     * @return string
     */
    public function getTypeOfElement(): string
    {
        return $this->typeOfElement;
    }
    /**
     * Set typeOfElement value
     * @param string $typeOfElement
     * @return \Bni\Gpec\WsdlToPhp\StructType\DeleteMailRequest
     * @throws InvalidArgumentException
     * @uses \Bni\Gpec\WsdlToPhp\EnumType\TypeOfElement::getValidValues()
     * @uses \Bni\Gpec\WsdlToPhp\EnumType\TypeOfElement::valueIsValid()
     */
    public function setTypeOfElement(string $typeOfElement): self
    {
        // validation for constraint: enumeration
        if (!\Bni\Gpec\WsdlToPhp\EnumType\TypeOfElement::valueIsValid($typeOfElement)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Bni\Gpec\WsdlToPhp\EnumType\TypeOfElement', is_array($typeOfElement) ? implode(', ', $typeOfElement) : var_export($typeOfElement, true), implode(', ', \Bni\Gpec\WsdlToPhp\EnumType\TypeOfElement::getValidValues())), __LINE__);
        }
        $this->typeOfElement = $typeOfElement;

        return $this;
    }
    /**
     * Get id value
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $id
     * @return \Bni\Gpec\WsdlToPhp\StructType\DeleteMailRequest
     */
    public function setId(?string $id): self
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;

        return $this;
    }
}
