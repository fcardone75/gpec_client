<?php

declare(strict_types=1);

namespace Bni\Gpec\WsdlToPhp\StructType;

use InvalidArgumentException;

/**
 * This class stands for GetMailsAndReceiptsRequest StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: s1:GetMailsAndReceiptsRequest
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMailsAndReceiptsRequest extends GetMailByIdRequest
{
    /**
     * The outType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $outType;
    /**
     * Constructor method for GetMailsAndReceiptsRequest
     * @uses GetMailsAndReceiptsRequest::setOutType()
     * @param string $outType
     */
    public function __construct(string $outType)
    {
        $this
            ->setOutType($outType);
    }
    /**
     * Get outType value
     * @return string
     */
    public function getOutType(): string
    {
        return $this->outType;
    }
    /**
     * Set outType value
     * @param string $outType
     * @return \Bni\Gpec\WsdlToPhp\StructType\GetMailsAndReceiptsRequest
     *@throws InvalidArgumentException
     * @uses \Bni\Gpec\WsdlToPhp\EnumType\OutType::getValidValues()
     * @uses \Bni\Gpec\WsdlToPhp\EnumType\OutType::valueIsValid()
     */
    public function setOutType(string $outType): self
    {
        // validation for constraint: enumeration
        if (!\Bni\Gpec\WsdlToPhp\EnumType\OutType::valueIsValid($outType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Bni\Gpec\WsdlToPhp\EnumType\OutType', is_array($outType) ? implode(', ', $outType) : var_export($outType, true), implode(', ', \Bni\Gpec\WsdlToPhp\EnumType\OutType::getValidValues())), __LINE__);
        }
        $this->outType = $outType;

        return $this;
    }
}
