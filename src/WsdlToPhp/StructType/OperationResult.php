<?php

declare(strict_types=1);

namespace Bni\Gpec\WsdlToPhp\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OperationResult StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class OperationResult extends AbstractStructBase
{
    /**
     * The resultCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $resultCode;
    /**
     * The errorCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $errorCode;
    /**
     * The resultMessage
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $resultMessage = null;
    /**
     * The executionTime
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $executionTime = null;
    /**
     * The trackingIdLog
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string|null
     */
    protected ?string $trackingIdLog;
    /**
     * Constructor method for OperationResult
     * @uses OperationResult::setResultCode()
     * @uses OperationResult::setErrorCode()
     * @uses OperationResult::setResultMessage()
     * @uses OperationResult::setExecutionTime()
     * @uses OperationResult::setTrackingIdLog()
     * @param string $resultCode
     * @param int $errorCode
     * @param string $resultMessage
     * @param string $executionTime
     * @param string $trackingIdLog
     */
    public function __construct(string $resultCode, int $errorCode, ?string $resultMessage = null, ?string $executionTime = null, ?string $trackingIdLog)
    {
        $this
            ->setResultCode($resultCode)
            ->setErrorCode($errorCode)
            ->setResultMessage($resultMessage)
            ->setExecutionTime($executionTime)
            ->setTrackingIdLog($trackingIdLog);
    }
    /**
     * Get resultCode value
     * @return string
     */
    public function getResultCode(): string
    {
        return $this->resultCode;
    }
    /**
     * Set resultCode value
     * @param string $resultCode
     * @return \Bni\Gpec\WsdlToPhp\StructType\OperationResult
     * @throws InvalidArgumentException
     * @uses \Bni\Gpec\WsdlToPhp\EnumType\ServiceResultCode::getValidValues()
     * @uses \Bni\Gpec\WsdlToPhp\EnumType\ServiceResultCode::valueIsValid()
     */
    public function setResultCode(string $resultCode): self
    {
        // validation for constraint: enumeration
        if (!\Bni\Gpec\WsdlToPhp\EnumType\ServiceResultCode::valueIsValid($resultCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Bni\Gpec\WsdlToPhp\EnumType\ServiceResultCode', is_array($resultCode) ? implode(', ', $resultCode) : var_export($resultCode, true), implode(', ', \Bni\Gpec\WsdlToPhp\EnumType\ServiceResultCode::getValidValues())), __LINE__);
        }
        $this->resultCode = $resultCode;

        return $this;
    }
    /**
     * Get errorCode value
     * @return int
     */
    public function getErrorCode(): int
    {
        return $this->errorCode;
    }
    /**
     * Set errorCode value
     * @param int $errorCode
     * @return \Bni\Gpec\WsdlToPhp\StructType\OperationResult
     */
    public function setErrorCode(int $errorCode): self
    {
        // validation for constraint: int
        if (!is_null($errorCode) && !(is_int($errorCode) || ctype_digit($errorCode))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($errorCode, true), gettype($errorCode)), __LINE__);
        }
        $this->errorCode = $errorCode;

        return $this;
    }
    /**
     * Get resultMessage value
     * @return string|null
     */
    public function getResultMessage(): ?string
    {
        return $this->resultMessage;
    }
    /**
     * Set resultMessage value
     * @param string $resultMessage
     * @return \Bni\Gpec\WsdlToPhp\StructType\OperationResult
     */
    public function setResultMessage(?string $resultMessage = null): self
    {
        // validation for constraint: string
        if (!is_null($resultMessage) && !is_string($resultMessage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($resultMessage, true), gettype($resultMessage)), __LINE__);
        }
        $this->resultMessage = $resultMessage;

        return $this;
    }
    /**
     * Get executionTime value
     * @return string|null
     */
    public function getExecutionTime(): ?string
    {
        return $this->executionTime;
    }
    /**
     * Set executionTime value
     * @param string $executionTime
     * @return \Bni\Gpec\WsdlToPhp\StructType\OperationResult
     */
    public function setExecutionTime(?string $executionTime = null): self
    {
        // validation for constraint: string
        if (!is_null($executionTime) && !is_string($executionTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($executionTime, true), gettype($executionTime)), __LINE__);
        }
        $this->executionTime = $executionTime;

        return $this;
    }
    /**
     * Get trackingIdLog value
     * @return string|null
     */
    public function getTrackingIdLog(): ?string
    {
        return $this->trackingIdLog;
    }
    /**
     * Set trackingIdLog value
     * @param string $trackingIdLog
     * @return \Bni\Gpec\WsdlToPhp\StructType\OperationResult
     */
    public function setTrackingIdLog(?string $trackingIdLog): self
    {
        // validation for constraint: string
        if (!is_null($trackingIdLog) && !is_string($trackingIdLog)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($trackingIdLog, true), gettype($trackingIdLog)), __LINE__);
        }
        $this->trackingIdLog = $trackingIdLog;

        return $this;
    }
}
