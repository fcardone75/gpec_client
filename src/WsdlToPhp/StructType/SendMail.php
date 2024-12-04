<?php

declare(strict_types=1);

namespace Bni\Gpec\WsdlToPhp\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for sendMail StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SendMail extends AbstractStructBase
{
    /**
     * The SendMailRequest
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: s1:SendMailRequest
     * @var \Bni\Gpec\WsdlToPhp\StructType\SendMailRequest
     */
    protected \Bni\Gpec\WsdlToPhp\StructType\SendMailRequest $SendMailRequest;
    /**
     * Constructor method for sendMail
     * @param \Bni\Gpec\WsdlToPhp\StructType\SendMailRequest $sendMailRequest
     * @uses SendMail::setSendMailRequest()
     */
    public function __construct(\Bni\Gpec\WsdlToPhp\StructType\SendMailRequest $sendMailRequest)
    {
        $this
            ->setSendMailRequest($sendMailRequest);
    }
    /**
     * Get SendMailRequest value
     * @return \Bni\Gpec\WsdlToPhp\StructType\SendMailRequest
     */
    public function getSendMailRequest(): \Bni\Gpec\WsdlToPhp\StructType\SendMailRequest
    {
        return $this->SendMailRequest;
    }
    /**
     * Set SendMailRequest value
     * @param \Bni\Gpec\WsdlToPhp\StructType\SendMailRequest $sendMailRequest
     * @return \Bni\Gpec\WsdlToPhp\StructType\SendMail
     */
    public function setSendMailRequest(\Bni\Gpec\WsdlToPhp\StructType\SendMailRequest $sendMailRequest): self
    {
        $this->SendMailRequest = $sendMailRequest;

        return $this;
    }
}
