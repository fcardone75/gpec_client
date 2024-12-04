<?php

declare(strict_types=1);

namespace Bni\Gpec\WsdlToPhp\StructType;

use InvalidArgumentException;

/**
 * This class stands for GetMailsRangeRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMailsRangeRequest extends GetMailsRequest
{
    /**
     * The fromDate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $fromDate;
    /**
     * The toDate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $toDate;
    /**
     * Constructor method for GetMailsRangeRequest
     * @uses GetMailsRangeRequest::setFromDate()
     * @uses GetMailsRangeRequest::setToDate()
     * @param string $fromDate
     * @param string $toDate
     */
    public function __construct(string $fromDate, string $toDate)
    {
        $this
            ->setFromDate($fromDate)
            ->setToDate($toDate);
    }
    /**
     * Get fromDate value
     * @return string
     */
    public function getFromDate(): string
    {
        return $this->fromDate;
    }
    /**
     * Set fromDate value
     * @param string $fromDate
     * @return \Bni\Gpec\WsdlToPhp\StructType\GetMailsRangeRequest
     */
    public function setFromDate(string $fromDate): self
    {
        // validation for constraint: string
        if (!is_null($fromDate) && !is_string($fromDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fromDate, true), gettype($fromDate)), __LINE__);
        }
        $this->fromDate = $fromDate;

        return $this;
    }
    /**
     * Get toDate value
     * @return string
     */
    public function getToDate(): string
    {
        return $this->toDate;
    }
    /**
     * Set toDate value
     * @param string $toDate
     * @return \Bni\Gpec\WsdlToPhp\StructType\GetMailsRangeRequest
     */
    public function setToDate(string $toDate): self
    {
        // validation for constraint: string
        if (!is_null($toDate) && !is_string($toDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($toDate, true), gettype($toDate)), __LINE__);
        }
        $this->toDate = $toDate;

        return $this;
    }
}
