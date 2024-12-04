<?php

declare(strict_types=1);

namespace Bni\Gpec\WsdlToPhp\StructType;

use InvalidArgumentException;

/**
 * This class stands for GetMailsToRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMailsToRequest extends GetMailsRequest
{
    /**
     * The to
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string|null
     */
    protected ?string $to;
    /**
     * Constructor method for GetMailsToRequest
     * @uses GetMailsToRequest::setTo()
     * @param string $to
     */
    public function __construct(?string $to)
    {
        $this
            ->setTo($to);
    }
    /**
     * Get to value
     * @return string|null
     */
    public function getTo(): ?string
    {
        return $this->to;
    }
    /**
     * Set to value
     * @param string $to
     * @return \Bni\Gpec\WsdlToPhp\StructType\GetMailsToRequest
     */
    public function setTo(?string $to): self
    {
        // validation for constraint: string
        if (!is_null($to) && !is_string($to)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($to, true), gettype($to)), __LINE__);
        }
        $this->to = $to;

        return $this;
    }
}
