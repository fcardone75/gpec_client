<?php

declare(strict_types=1);

namespace Bni\Gpec\WsdlToPhp\StructType;

use InvalidArgumentException;

/**
 * This class stands for MessageInfo StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MessageInfo extends MessageInfoSender
{
    /**
     * The mailStatus
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $mailStatus;
    /**
     * The sender
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $sender = null;
    /**
     * The deliveryNotificationOptions
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $deliveryNotificationOptions = null;
    /**
     * The id
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $id = null;
    /**
     * The submissionDate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string|null
     */
    protected ?string $submissionDate;
    /**
     * The sentDate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string|null
     */
    protected ?string $sentDate;
    /**
     * The acceptedDate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string|null
     */
    protected ?string $acceptedDate;
    /**
     * Constructor method for MessageInfo
     * @uses MessageInfo::setMailStatus()
     * @uses MessageInfo::setSender()
     * @uses MessageInfo::setDeliveryNotificationOptions()
     * @uses MessageInfo::setId()
     * @uses MessageInfo::setSubmissionDate()
     * @uses MessageInfo::setSentDate()
     * @uses MessageInfo::setAcceptedDate()
     * @param string $mailStatus
     * @param string $sender
     * @param array|string $deliveryNotificationOptions
     * @param string $id
     * @param string $submissionDate
     * @param string $sentDate
     * @param string $acceptedDate
     */
    public function __construct(string $mailStatus, ?string $sender = null, $deliveryNotificationOptions = null, ?string $id = null, ?string $submissionDate, ?string $sentDate, ?string $acceptedDate)
    {
        $this
            ->setMailStatus($mailStatus)
            ->setSender($sender)
            ->setDeliveryNotificationOptions($deliveryNotificationOptions)
            ->setId($id)
            ->setSubmissionDate($submissionDate)
            ->setSentDate($sentDate)
            ->setAcceptedDate($acceptedDate);
    }
    /**
     * Get mailStatus value
     * @return string
     */
    public function getMailStatus(): string
    {
        return $this->mailStatus;
    }
    /**
     * Set mailStatus value
     * @param string $mailStatus
     * @return \Bni\Gpec\WsdlToPhp\StructType\MessageInfo
     * @throws InvalidArgumentException
     * @uses \Bni\Gpec\WsdlToPhp\EnumType\MailStatus::getValidValues()
     * @uses \Bni\Gpec\WsdlToPhp\EnumType\MailStatus::valueIsValid()
     */
    public function setMailStatus(string $mailStatus): self
    {
        // validation for constraint: enumeration
        if (!\Bni\Gpec\WsdlToPhp\EnumType\MailStatus::valueIsValid($mailStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Bni\Gpec\WsdlToPhp\EnumType\MailStatus', is_array($mailStatus) ? implode(', ', $mailStatus) : var_export($mailStatus, true), implode(', ', \Bni\Gpec\WsdlToPhp\EnumType\MailStatus::getValidValues())), __LINE__);
        }
        $this->mailStatus = $mailStatus;

        return $this;
    }
    /**
     * Get sender value
     * @return string|null
     */
    public function getSender(): ?string
    {
        return $this->sender;
    }
    /**
     * Set sender value
     * @param string $sender
     * @return \Bni\Gpec\WsdlToPhp\StructType\MessageInfo
     */
    public function setSender(?string $sender = null): self
    {
        // validation for constraint: string
        if (!is_null($sender) && !is_string($sender)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sender, true), gettype($sender)), __LINE__);
        }
        $this->sender = $sender;

        return $this;
    }
    /**
     * Get deliveryNotificationOptions value
     * @return string[]
     */
    public function getDeliveryNotificationOptions(): ?array
    {
        return $this->deliveryNotificationOptions;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setDeliveryNotificationOptions method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDeliveryNotificationOptions method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDeliveryNotificationOptionsForArrayConstraintFromSetDeliveryNotificationOptions(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $messageInfoDeliveryNotificationOptionsItem) {
            // validation for constraint: enumeration
            if (!\Bni\Gpec\WsdlToPhp\EnumType\DeliveryNotificationOptionsEnum::valueIsValid($messageInfoDeliveryNotificationOptionsItem)) {
                $invalidValues[] = is_object($messageInfoDeliveryNotificationOptionsItem) ? get_class($messageInfoDeliveryNotificationOptionsItem) : sprintf('%s(%s)', gettype($messageInfoDeliveryNotificationOptionsItem), var_export($messageInfoDeliveryNotificationOptionsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Bni\Gpec\WsdlToPhp\EnumType\DeliveryNotificationOptionsEnum', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \Bni\Gpec\WsdlToPhp\EnumType\DeliveryNotificationOptionsEnum::getValidValues()));
        }
        unset($invalidValues);

        return $message;
    }
    /**
     * Set deliveryNotificationOptions value
     * @param array|string $deliveryNotificationOptions
     * @return \Bni\Gpec\WsdlToPhp\StructType\MessageInfo
     * @throws InvalidArgumentException
     * @uses \Bni\Gpec\WsdlToPhp\EnumType\DeliveryNotificationOptionsEnum::getValidValues()
     * @uses \Bni\Gpec\WsdlToPhp\EnumType\DeliveryNotificationOptionsEnum::valueIsValid()
     */
    public function setDeliveryNotificationOptions($deliveryNotificationOptions = null): self
    {
        // validation for constraint: array
        if ('' !== ($deliveryNotificationOptionsArrayErrorMessage = self::validateDeliveryNotificationOptionsForArrayConstraintFromSetDeliveryNotificationOptions($deliveryNotificationOptions))) {
            throw new InvalidArgumentException($deliveryNotificationOptionsArrayErrorMessage, __LINE__);
        }
        $this->deliveryNotificationOptions = is_array($deliveryNotificationOptions) ? implode(' ', $deliveryNotificationOptions) : $deliveryNotificationOptions;

        return $this;
    }
    /**
     * Add item to deliveryNotificationOptions value
     * @param array|string $item
     * @return \Bni\Gpec\WsdlToPhp\StructType\MessageInfo
     *@throws InvalidArgumentException
     * @uses \Bni\Gpec\WsdlToPhp\EnumType\DeliveryNotificationOptionsEnum::getValidValues()
     * @uses \Bni\Gpec\WsdlToPhp\EnumType\DeliveryNotificationOptionsEnum::valueIsValid()
     */
    public function addToDeliveryNotificationOptions(string $item): self
    {
        // validation for constraint: enumeration
        if (!\Bni\Gpec\WsdlToPhp\EnumType\DeliveryNotificationOptionsEnum::valueIsValid($item)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Bni\Gpec\WsdlToPhp\EnumType\DeliveryNotificationOptionsEnum', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \Bni\Gpec\WsdlToPhp\EnumType\DeliveryNotificationOptionsEnum::getValidValues())), __LINE__);
        }
        $this->deliveryNotificationOptions[] = $item;

        return $this;
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
     * @return \Bni\Gpec\WsdlToPhp\StructType\MessageInfo
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
    /**
     * Get submissionDate value
     * @return string|null
     */
    public function getSubmissionDate(): ?string
    {
        return $this->submissionDate;
    }
    /**
     * Set submissionDate value
     * @param string $submissionDate
     * @return \Bni\Gpec\WsdlToPhp\StructType\MessageInfo
     */
    public function setSubmissionDate(?string $submissionDate): self
    {
        // validation for constraint: string
        if (!is_null($submissionDate) && !is_string($submissionDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($submissionDate, true), gettype($submissionDate)), __LINE__);
        }
        $this->submissionDate = $submissionDate;

        return $this;
    }
    /**
     * Get sentDate value
     * @return string|null
     */
    public function getSentDate(): ?string
    {
        return $this->sentDate;
    }
    /**
     * Set sentDate value
     * @param string $sentDate
     * @return \Bni\Gpec\WsdlToPhp\StructType\MessageInfo
     */
    public function setSentDate(?string $sentDate): self
    {
        // validation for constraint: string
        if (!is_null($sentDate) && !is_string($sentDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sentDate, true), gettype($sentDate)), __LINE__);
        }
        $this->sentDate = $sentDate;

        return $this;
    }
    /**
     * Get acceptedDate value
     * @return string|null
     */
    public function getAcceptedDate(): ?string
    {
        return $this->acceptedDate;
    }
    /**
     * Set acceptedDate value
     * @param string $acceptedDate
     * @return \Bni\Gpec\WsdlToPhp\StructType\MessageInfo
     */
    public function setAcceptedDate(?string $acceptedDate): self
    {
        // validation for constraint: string
        if (!is_null($acceptedDate) && !is_string($acceptedDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($acceptedDate, true), gettype($acceptedDate)), __LINE__);
        }
        $this->acceptedDate = $acceptedDate;

        return $this;
    }
}
