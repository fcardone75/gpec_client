<?php

declare(strict_types=1);

namespace Bni\Gpec\WsdlToPhp\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GPECHeaderRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GPECHeaderRequest extends AbstractStructBase
{
    /**
     * The userId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $userId = null;
    /**
     * The applicationId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string|null
     */
    protected ?string $applicationId;
    /**
     * The trackingId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string|null
     */
    protected ?string $trackingId;
    /**
     * Constructor method for GPECHeaderRequest
     * @uses GPECHeaderRequest::setUserId()
     * @uses GPECHeaderRequest::setApplicationId()
     * @uses GPECHeaderRequest::setTrackingId()
     * @param string $userId
     * @param string $applicationId
     * @param string $trackingId
     */
    public function __construct(?string $userId = null, ?string $applicationId, ?string $trackingId)
    {
        $this
            ->setUserId($userId)
            ->setApplicationId($applicationId)
            ->setTrackingId($trackingId);
    }
    /**
     * Get userId value
     * @return string|null
     */
    public function getUserId(): ?string
    {
        return $this->userId;
    }
    /**
     * Set userId value
     * @param string $userId
     * @return \Bni\Gpec\WsdlToPhp\StructType\GPECHeaderRequest
     */
    public function setUserId(?string $userId = null): self
    {
        // validation for constraint: string
        if (!is_null($userId) && !is_string($userId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userId, true), gettype($userId)), __LINE__);
        }
        $this->userId = $userId;
        
        return $this;
    }
    /**
     * Get applicationId value
     * @return string|null
     */
    public function getApplicationId(): ?string
    {
        return $this->applicationId;
    }
    /**
     * Set applicationId value
     * @param string $applicationId
     * @return \Bni\Gpec\WsdlToPhp\StructType\GPECHeaderRequest
     */
    public function setApplicationId(?string $applicationId): self
    {
        // validation for constraint: string
        if (!is_null($applicationId) && !is_string($applicationId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($applicationId, true), gettype($applicationId)), __LINE__);
        }
        $this->applicationId = $applicationId;
        
        return $this;
    }
    /**
     * Get trackingId value
     * @return string|null
     */
    public function getTrackingId(): ?string
    {
        return $this->trackingId;
    }
    /**
     * Set trackingId value
     * @param string $trackingId
     * @return \Bni\Gpec\WsdlToPhp\StructType\GPECHeaderRequest
     */
    public function setTrackingId(?string $trackingId): self
    {
        // validation for constraint: string
        if (!is_null($trackingId) && !is_string($trackingId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($trackingId, true), gettype($trackingId)), __LINE__);
        }
        $this->trackingId = $trackingId;
        
        return $this;
    }
}
