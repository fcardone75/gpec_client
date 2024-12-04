<?php

declare(strict_types=1);

namespace Bni\Gpec\WsdlToPhp\StructType;

use InvalidArgumentException;

/**
 * This class stands for GetMailCountResponse StructType
 * Meta information extracted from the WSDL
 * - type: s5:GetMailCountResponse
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMailCountResponse_1 extends BaseResponse
{
    /**
     * The count
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $count;
    /**
     * Constructor method for GetMailCountResponse
     * @uses GetMailCountResponse_1::setCount()
     * @param int $count
     */
    public function __construct(int $count)
    {
        $this
            ->setCount($count);
    }
    /**
     * Get count value
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }
    /**
     * Set count value
     * @param int $count
     * @return \Bni\Gpec\WsdlToPhp\StructType\GetMailCountResponse_1
     */
    public function setCount(int $count): self
    {
        // validation for constraint: int
        if (!is_null($count) && !(is_int($count) || ctype_digit($count))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($count, true), gettype($count)), __LINE__);
        }
        $this->count = $count;

        return $this;
    }
}
