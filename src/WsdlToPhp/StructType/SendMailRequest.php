<?php

declare(strict_types=1);

namespace Bni\Gpec\WsdlToPhp\StructType;

/**
 * This class stands for SendMailRequest StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: s1:SendMailRequest
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SendMailRequest extends BaseRequest
{
    /**
     * The message
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \Bni\Gpec\WsdlToPhp\StructType\MessageInfoSender|null
     */
    protected ?\Bni\Gpec\WsdlToPhp\StructType\MessageInfoSender $message;
    /**
     * Constructor method for SendMailRequest
     * @param \Bni\Gpec\WsdlToPhp\StructType\MessageInfoSender $message
     * @uses SendMailRequest::setMessage()
     */
    public function __construct(?\Bni\Gpec\WsdlToPhp\StructType\MessageInfoSender $message)
    {
        $this
            ->setMessage($message);
    }
    /**
     * Get message value
     * @return \Bni\Gpec\WsdlToPhp\StructType\MessageInfoSender|null
     */
    public function getMessage(): ?\Bni\Gpec\WsdlToPhp\StructType\MessageInfoSender
    {
        return $this->message;
    }
    /**
     * Set message value
     * @param \Bni\Gpec\WsdlToPhp\StructType\MessageInfoSender $message
     * @return \Bni\Gpec\WsdlToPhp\StructType\SendMailRequest
     */
    public function setMessage(?\Bni\Gpec\WsdlToPhp\StructType\MessageInfoSender $message): self
    {
        $this->message = $message;

        return $this;
    }
}
