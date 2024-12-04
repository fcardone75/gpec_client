<?php

declare(strict_types=1);

namespace Bni\Gpec\WsdlToPhp\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AttachmentSet StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AttachmentSet extends AbstractStructBase
{
    /**
     * The attachments
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Bni\Gpec\WsdlToPhp\ArrayType\ArrayOfAttachment|null
     */
    protected ?\Bni\Gpec\WsdlToPhp\ArrayType\ArrayOfAttachment $attachments = null;
    /**
     * Constructor method for AttachmentSet
     * @param \Bni\Gpec\WsdlToPhp\ArrayType\ArrayOfAttachment $attachments
     * @uses AttachmentSet::setAttachments()
     */
    public function __construct(?\Bni\Gpec\WsdlToPhp\ArrayType\ArrayOfAttachment $attachments = null)
    {
        $this
            ->setAttachments($attachments);
    }
    /**
     * Get attachments value
     * @return \Bni\Gpec\WsdlToPhp\ArrayType\ArrayOfAttachment|null
     */
    public function getAttachments(): ?\Bni\Gpec\WsdlToPhp\ArrayType\ArrayOfAttachment
    {
        return $this->attachments;
    }
    /**
     * Set attachments value
     * @param \Bni\Gpec\WsdlToPhp\ArrayType\ArrayOfAttachment $attachments
     * @return \Bni\Gpec\WsdlToPhp\StructType\AttachmentSet
     */
    public function setAttachments(?\Bni\Gpec\WsdlToPhp\ArrayType\ArrayOfAttachment $attachments = null): self
    {
        $this->attachments = $attachments;

        return $this;
    }
}
