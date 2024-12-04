<?php

declare(strict_types=1);

namespace Bni\Gpec\WsdlToPhp\StructType;

use InvalidArgumentException;

/**
 * This class stands for SendMailResponse StructType
 * Meta information extracted from the WSDL
 * - type: s5:SendMailResponse
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SendMailResponse_1 extends BaseResponse
{
    /**
     * The id
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $id = null;
    /**
     * Constructor method for SendMailResponse
     * @uses SendMailResponse_1::setId()
     * @param string $id
     */
    public function __construct(?string $id = null)
    {
        $this
            ->setId($id);
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
     * @return \Bni\Gpec\WsdlToPhp\StructType\SendMailResponse_1
     */
    public function setId(?string $id = null): self
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;

        return $this;
    }
}
