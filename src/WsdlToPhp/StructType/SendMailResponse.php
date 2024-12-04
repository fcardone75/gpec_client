<?php

declare(strict_types=1);

namespace Bni\Gpec\WsdlToPhp\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for sendMailResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SendMailResponse extends AbstractStructBase
{
    /**
     * The SendMailResponse
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: s5:SendMailResponse
     * @var \Bni\Gpec\WsdlToPhp\StructType\SendMailResponse_1|null
     */
    protected ?\Bni\Gpec\WsdlToPhp\StructType\SendMailResponse_1 $SendMailResponse = null;
    /**
     * Constructor method for sendMailResponse
     * @param \Bni\Gpec\WsdlToPhp\StructType\SendMailResponse_1 $sendMailResponse
     * @uses SendMailResponse::setSendMailResponse()
     */
    public function __construct(?\Bni\Gpec\WsdlToPhp\StructType\SendMailResponse_1 $sendMailResponse = null)
    {
        $this
            ->setSendMailResponse($sendMailResponse);
    }
    /**
     * Get SendMailResponse value
     * @return \Bni\Gpec\WsdlToPhp\StructType\SendMailResponse_1|null
     */
    public function getSendMailResponse(): ?\Bni\Gpec\WsdlToPhp\StructType\SendMailResponse_1
    {
        return $this->SendMailResponse;
    }
    /**
     * Set SendMailResponse value
     * @param \Bni\Gpec\WsdlToPhp\StructType\SendMailResponse_1 $sendMailResponse
     * @return \Bni\Gpec\WsdlToPhp\StructType\SendMailResponse
     */
    public function setSendMailResponse(?\Bni\Gpec\WsdlToPhp\StructType\SendMailResponse_1 $sendMailResponse = null): self
    {
        $this->SendMailResponse = $sendMailResponse;

        return $this;
    }
}
