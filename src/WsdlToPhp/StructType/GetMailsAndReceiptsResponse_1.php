<?php

declare(strict_types=1);

namespace Bni\Gpec\WsdlToPhp\StructType;

/**
 * This class stands for GetMailsAndReceiptsResponse StructType
 * Meta information extracted from the WSDL
 * - type: s5:GetMailsAndReceiptsResponse
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMailsAndReceiptsResponse_1 extends GetMailCountResponse_1
{
    /**
     * The messages
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \Bni\Gpec\WsdlToPhp\ArrayType\ArrayOfMessageInfo|null
     */
    protected ?\Bni\Gpec\WsdlToPhp\ArrayType\ArrayOfMessageInfo $messages;
    /**
     * Constructor method for GetMailsAndReceiptsResponse
     * @param \Bni\Gpec\WsdlToPhp\ArrayType\ArrayOfMessageInfo $messages
     * @uses GetMailsAndReceiptsResponse_1::setMessages()
     */
    public function __construct(?\Bni\Gpec\WsdlToPhp\ArrayType\ArrayOfMessageInfo $messages)
    {
        $this
            ->setMessages($messages);
    }
    /**
     * Get messages value
     * @return \Bni\Gpec\WsdlToPhp\ArrayType\ArrayOfMessageInfo|null
     */
    public function getMessages(): ?\Bni\Gpec\WsdlToPhp\ArrayType\ArrayOfMessageInfo
    {
        return $this->messages;
    }
    /**
     * Set messages value
     * @param \Bni\Gpec\WsdlToPhp\ArrayType\ArrayOfMessageInfo $messages
     * @return \Bni\Gpec\WsdlToPhp\StructType\GetMailsAndReceiptsResponse_1
     */
    public function setMessages(?\Bni\Gpec\WsdlToPhp\ArrayType\ArrayOfMessageInfo $messages): self
    {
        $this->messages = $messages;

        return $this;
    }
}
