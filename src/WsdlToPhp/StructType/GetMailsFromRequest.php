<?php

declare(strict_types=1);

namespace Bni\Gpec\WsdlToPhp\StructType;

use InvalidArgumentException;

/**
 * This class stands for GetMailsFromRequest StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: s1:GetMailsFromRequest
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMailsFromRequest extends GetMailsRequest
{
    /**
     * The from
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string|null
     */
    protected ?string $from;
    /**
     * Constructor method for GetMailsFromRequest
     * @uses GetMailsFromRequest::setFrom()
     * @param string $from
     */
    public function __construct(?string $from)
    {
        $this
            ->setFrom($from);
    }
    /**
     * Get from value
     * @return string|null
     */
    public function getFrom(): ?string
    {
        return $this->from;
    }
    /**
     * Set from value
     * @param string $from
     * @return \Bni\Gpec\WsdlToPhp\StructType\GetMailsFromRequest
     */
    public function setFrom(?string $from): self
    {
        // validation for constraint: string
        if (!is_null($from) && !is_string($from)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($from, true), gettype($from)), __LINE__);
        }
        $this->from = $from;

        return $this;
    }
}
