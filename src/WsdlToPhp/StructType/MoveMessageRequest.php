<?php

declare(strict_types=1);

namespace Bni\Gpec\WsdlToPhp\StructType;

use InvalidArgumentException;

/**
 * This class stands for MoveMessageRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MoveMessageRequest extends BaseRequest
{
    /**
     * The MessageId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string|null
     */
    protected ?string $MessageId;
    /**
     * The DestinationFolder
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string|null
     */
    protected ?string $DestinationFolder;
    /**
     * Constructor method for MoveMessageRequest
     * @uses MoveMessageRequest::setMessageId()
     * @uses MoveMessageRequest::setDestinationFolder()
     * @param string $messageId
     * @param string $destinationFolder
     */
    public function __construct(?string $messageId, ?string $destinationFolder)
    {
        $this
            ->setMessageId($messageId)
            ->setDestinationFolder($destinationFolder);
    }
    /**
     * Get MessageId value
     * @return string|null
     */
    public function getMessageId(): ?string
    {
        return $this->MessageId;
    }
    /**
     * Set MessageId value
     * @param string $messageId
     * @return \Bni\Gpec\WsdlToPhp\StructType\MoveMessageRequest
     */
    public function setMessageId(?string $messageId): self
    {
        // validation for constraint: string
        if (!is_null($messageId) && !is_string($messageId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($messageId, true), gettype($messageId)), __LINE__);
        }
        $this->MessageId = $messageId;

        return $this;
    }
    /**
     * Get DestinationFolder value
     * @return string|null
     */
    public function getDestinationFolder(): ?string
    {
        return $this->DestinationFolder;
    }
    /**
     * Set DestinationFolder value
     * @param string $destinationFolder
     * @return \Bni\Gpec\WsdlToPhp\StructType\MoveMessageRequest
     */
    public function setDestinationFolder(?string $destinationFolder): self
    {
        // validation for constraint: string
        if (!is_null($destinationFolder) && !is_string($destinationFolder)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destinationFolder, true), gettype($destinationFolder)), __LINE__);
        }
        $this->DestinationFolder = $destinationFolder;

        return $this;
    }
}
