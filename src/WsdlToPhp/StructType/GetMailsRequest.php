<?php

declare(strict_types=1);

namespace Bni\Gpec\WsdlToPhp\StructType;

use InvalidArgumentException;

/**
 * This class stands for GetMailsRequest StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: s1:GetMailsRequest
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMailsRequest extends GetMailRequest
{
    /**
     * The limit
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $limit;
    /**
     * The offset
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $offset;
    /**
     * The unseenStatus
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    protected bool $unseenStatus;
    /**
     * The outType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $outType;
    /**
     * Constructor method for GetMailsRequest
     * @uses GetMailsRequest::setLimit()
     * @uses GetMailsRequest::setOffset()
     * @uses GetMailsRequest::setUnseenStatus()
     * @uses GetMailsRequest::setOutType()
     * @param int $limit
     * @param int $offset
     * @param bool $unseenStatus
     * @param string $outType
     */
    public function __construct(int $limit, int $offset, bool $unseenStatus, string $outType)
    {
        $this
            ->setLimit($limit)
            ->setOffset($offset)
            ->setUnseenStatus($unseenStatus)
            ->setOutType($outType);
    }
    /**
     * Get limit value
     * @return int
     */
    public function getLimit(): int
    {
        return $this->limit;
    }
    /**
     * Set limit value
     * @param int $limit
     * @return \Bni\Gpec\WsdlToPhp\StructType\GetMailsRequest
     */
    public function setLimit(int $limit): self
    {
        // validation for constraint: int
        if (!is_null($limit) && !(is_int($limit) || ctype_digit($limit))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($limit, true), gettype($limit)), __LINE__);
        }
        $this->limit = $limit;

        return $this;
    }
    /**
     * Get offset value
     * @return int
     */
    public function getOffset(): int
    {
        return $this->offset;
    }
    /**
     * Set offset value
     * @param int $offset
     * @return \Bni\Gpec\WsdlToPhp\StructType\GetMailsRequest
     */
    public function setOffset(int $offset): self
    {
        // validation for constraint: int
        if (!is_null($offset) && !(is_int($offset) || ctype_digit($offset))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($offset, true), gettype($offset)), __LINE__);
        }
        $this->offset = $offset;

        return $this;
    }
    /**
     * Get unseenStatus value
     * @return bool
     */
    public function getUnseenStatus(): bool
    {
        return $this->unseenStatus;
    }
    /**
     * Set unseenStatus value
     * @param bool $unseenStatus
     * @return \Bni\Gpec\WsdlToPhp\StructType\GetMailsRequest
     */
    public function setUnseenStatus(bool $unseenStatus): self
    {
        // validation for constraint: boolean
        if (!is_null($unseenStatus) && !is_bool($unseenStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($unseenStatus, true), gettype($unseenStatus)), __LINE__);
        }
        $this->unseenStatus = $unseenStatus;

        return $this;
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
     * @return \Bni\Gpec\WsdlToPhp\StructType\GetMailsRequest
     * @throws InvalidArgumentException
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
