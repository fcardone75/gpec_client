<?php

declare(strict_types=1);

namespace Bni\Gpec\WsdlToPhp\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for deleteMail StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteMail extends AbstractStructBase
{
    /**
     * The deleteMailRequest
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: s1:deleteMailRequest
     * @var \Bni\Gpec\WsdlToPhp\StructType\DeleteMailRequest
     */
    protected \Bni\Gpec\WsdlToPhp\StructType\DeleteMailRequest $deleteMailRequest;
    /**
     * Constructor method for deleteMail
     * @param \Bni\Gpec\WsdlToPhp\StructType\DeleteMailRequest $deleteMailRequest
     * @uses DeleteMail::setDeleteMailRequest()
     */
    public function __construct(\Bni\Gpec\WsdlToPhp\StructType\DeleteMailRequest $deleteMailRequest)
    {
        $this
            ->setDeleteMailRequest($deleteMailRequest);
    }
    /**
     * Get deleteMailRequest value
     * @return \Bni\Gpec\WsdlToPhp\StructType\DeleteMailRequest
     */
    public function getDeleteMailRequest(): \Bni\Gpec\WsdlToPhp\StructType\DeleteMailRequest
    {
        return $this->deleteMailRequest;
    }
    /**
     * Set deleteMailRequest value
     * @param \Bni\Gpec\WsdlToPhp\StructType\DeleteMailRequest $deleteMailRequest
     * @return \Bni\Gpec\WsdlToPhp\StructType\DeleteMail
     */
    public function setDeleteMailRequest(\Bni\Gpec\WsdlToPhp\StructType\DeleteMailRequest $deleteMailRequest): self
    {
        $this->deleteMailRequest = $deleteMailRequest;

        return $this;
    }
}
