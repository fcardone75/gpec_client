<?php

declare(strict_types=1);

namespace Bni\Gpec\WsdlToPhp\StructType;

/**
 * This class stands for GetMailByIdResponse StructType
 * Meta information extracted from the WSDL
 * - type: s5:GetMailByIdResponse
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMailByIdResponse_1 extends BaseResponse
{
    /**
     * The message
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \Bni\Gpec\WsdlToPhp\StructType\MessageInfo|null
     */
    protected ?\Bni\Gpec\WsdlToPhp\StructType\MessageInfo $message;
    /**
     * Constructor method for GetMailByIdResponse
     * @param \Bni\Gpec\WsdlToPhp\StructType\MessageInfo $message
     * @uses GetMailByIdResponse_1::setMessage()
     */
    public function __construct(?\Bni\Gpec\WsdlToPhp\StructType\MessageInfo $message)
    {
        $this
            ->setMessage($message);
    }
    /**
     * Get message value
     * @return \Bni\Gpec\WsdlToPhp\StructType\MessageInfo|null
     */
    public function getMessage(): ?\Bni\Gpec\WsdlToPhp\StructType\MessageInfo
    {
        return $this->message;
    }
    /**
     * Set message value
     * @param \Bni\Gpec\WsdlToPhp\StructType\MessageInfo $message
     * @return \Bni\Gpec\WsdlToPhp\StructType\GetMailByIdResponse_1
     */
    public function setMessage(?\Bni\Gpec\WsdlToPhp\StructType\MessageInfo $message): self
    {
        $this->message = $message;

        return $this;
    }
}
