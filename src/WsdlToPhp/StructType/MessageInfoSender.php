<?php

declare(strict_types=1);

namespace Bni\Gpec\WsdlToPhp\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MessageInfoSender StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MessageInfoSender extends AbstractStructBase
{
    /**
     * The subjectEncoding
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $subjectEncoding;
    /**
     * The bodyEncoding
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $bodyEncoding;
    /**
     * The isBodyHtml
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    protected bool $isBodyHtml;
    /**
     * The priority
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $priority;
    /**
     * The headersEncoding
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $headersEncoding;
    /**
     * The to
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $to = null;
    /**
     * The cc
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $cc = null;
    /**
     * The bcc
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $bcc = null;
    /**
     * The headers
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Bni\Gpec\WsdlToPhp\ArrayType\ArrayOfObjectHeaders|null
     */
    protected ?\Bni\Gpec\WsdlToPhp\ArrayType\ArrayOfObjectHeaders $headers = null;
    /**
     * The subject
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string|null
     */
    protected ?string $subject;
    /**
     * The body
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string|null
     */
    protected ?string $body;
    /**
     * The attachments
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \Bni\Gpec\WsdlToPhp\StructType\AttachmentSet|null
     */
    protected ?\Bni\Gpec\WsdlToPhp\StructType\AttachmentSet $attachments;
    /**
     * Constructor method for MessageInfoSender
     * @param string $subjectEncoding
     * @param string $bodyEncoding
     * @param bool $isBodyHtml
     * @param string $priority
     * @param string $headersEncoding
     * @param string $to
     * @param string $cc
     * @param string $bcc
     * @param \Bni\Gpec\WsdlToPhp\ArrayType\ArrayOfObjectHeaders $headers
     * @param string $subject
     * @param string $body
     * @param \Bni\Gpec\WsdlToPhp\StructType\AttachmentSet $attachments
     *@uses MessageInfoSender::setSubjectEncoding()
     * @uses MessageInfoSender::setBodyEncoding()
     * @uses MessageInfoSender::setIsBodyHtml()
     * @uses MessageInfoSender::setPriority()
     * @uses MessageInfoSender::setHeadersEncoding()
     * @uses MessageInfoSender::setTo()
     * @uses MessageInfoSender::setCc()
     * @uses MessageInfoSender::setBcc()
     * @uses MessageInfoSender::setHeaders()
     * @uses MessageInfoSender::setSubject()
     * @uses MessageInfoSender::setBody()
     * @uses MessageInfoSender::setAttachments()
     */
    public function __construct(string $subjectEncoding, string $bodyEncoding, bool $isBodyHtml, string $priority, string $headersEncoding, ?string $to = null, ?string $cc = null, ?string $bcc = null, ?\Bni\Gpec\WsdlToPhp\ArrayType\ArrayOfObjectHeaders $headers = null, ?string $subject, ?string $body, ?\Bni\Gpec\WsdlToPhp\StructType\AttachmentSet $attachments)
    {
        $this
            ->setSubjectEncoding($subjectEncoding)
            ->setBodyEncoding($bodyEncoding)
            ->setIsBodyHtml($isBodyHtml)
            ->setPriority($priority)
            ->setHeadersEncoding($headersEncoding)
            ->setTo($to)
            ->setCc($cc)
            ->setBcc($bcc)
            ->setHeaders($headers)
            ->setSubject($subject)
            ->setBody($body)
            ->setAttachments($attachments);
    }
    /**
     * Get subjectEncoding value
     * @return string
     */
    public function getSubjectEncoding(): string
    {
        return $this->subjectEncoding;
    }
    /**
     * Set subjectEncoding value
     * @param string $subjectEncoding
     * @return \Bni\Gpec\WsdlToPhp\StructType\MessageInfoSender
     * @throws InvalidArgumentException
     * @uses \Bni\Gpec\WsdlToPhp\EnumType\Encoding::getValidValues()
     * @uses \Bni\Gpec\WsdlToPhp\EnumType\Encoding::valueIsValid()
     */
    public function setSubjectEncoding(string $subjectEncoding): self
    {
        // validation for constraint: enumeration
        if (!\Bni\Gpec\WsdlToPhp\EnumType\Encoding::valueIsValid($subjectEncoding)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Bni\Gpec\WsdlToPhp\EnumType\Encoding', is_array($subjectEncoding) ? implode(', ', $subjectEncoding) : var_export($subjectEncoding, true), implode(', ', \Bni\Gpec\WsdlToPhp\EnumType\Encoding::getValidValues())), __LINE__);
        }
        $this->subjectEncoding = $subjectEncoding;

        return $this;
    }
    /**
     * Get bodyEncoding value
     * @return string
     */
    public function getBodyEncoding(): string
    {
        return $this->bodyEncoding;
    }
    /**
     * Set bodyEncoding value
     * @param string $bodyEncoding
     * @return \Bni\Gpec\WsdlToPhp\StructType\MessageInfoSender
     * @throws InvalidArgumentException
     * @uses \Bni\Gpec\WsdlToPhp\EnumType\Encoding::getValidValues()
     * @uses \Bni\Gpec\WsdlToPhp\EnumType\Encoding::valueIsValid()
     */
    public function setBodyEncoding(string $bodyEncoding): self
    {
        // validation for constraint: enumeration
        if (!\Bni\Gpec\WsdlToPhp\EnumType\Encoding::valueIsValid($bodyEncoding)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Bni\Gpec\WsdlToPhp\EnumType\Encoding', is_array($bodyEncoding) ? implode(', ', $bodyEncoding) : var_export($bodyEncoding, true), implode(', ', \Bni\Gpec\WsdlToPhp\EnumType\Encoding::getValidValues())), __LINE__);
        }
        $this->bodyEncoding = $bodyEncoding;

        return $this;
    }
    /**
     * Get isBodyHtml value
     * @return bool
     */
    public function getIsBodyHtml(): bool
    {
        return $this->isBodyHtml;
    }
    /**
     * Set isBodyHtml value
     * @param bool $isBodyHtml
     * @return \Bni\Gpec\WsdlToPhp\StructType\MessageInfoSender
     */
    public function setIsBodyHtml(bool $isBodyHtml): self
    {
        // validation for constraint: boolean
        if (!is_null($isBodyHtml) && !is_bool($isBodyHtml)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isBodyHtml, true), gettype($isBodyHtml)), __LINE__);
        }
        $this->isBodyHtml = $isBodyHtml;

        return $this;
    }
    /**
     * Get priority value
     * @return string
     */
    public function getPriority(): string
    {
        return $this->priority;
    }
    /**
     * Set priority value
     * @param string $priority
     * @return \Bni\Gpec\WsdlToPhp\StructType\MessageInfoSender
     * @throws InvalidArgumentException
     * @uses \Bni\Gpec\WsdlToPhp\EnumType\MailPriority::getValidValues()
     * @uses \Bni\Gpec\WsdlToPhp\EnumType\MailPriority::valueIsValid()
     */
    public function setPriority(string $priority): self
    {
        // validation for constraint: enumeration
        if (!\Bni\Gpec\WsdlToPhp\EnumType\MailPriority::valueIsValid($priority)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Bni\Gpec\WsdlToPhp\EnumType\MailPriority', is_array($priority) ? implode(', ', $priority) : var_export($priority, true), implode(', ', \Bni\Gpec\WsdlToPhp\EnumType\MailPriority::getValidValues())), __LINE__);
        }
        $this->priority = $priority;

        return $this;
    }
    /**
     * Get headersEncoding value
     * @return string
     */
    public function getHeadersEncoding(): string
    {
        return $this->headersEncoding;
    }
    /**
     * Set headersEncoding value
     * @param string $headersEncoding
     * @return \Bni\Gpec\WsdlToPhp\StructType\MessageInfoSender
     * @throws InvalidArgumentException
     * @uses \Bni\Gpec\WsdlToPhp\EnumType\Encoding::getValidValues()
     * @uses \Bni\Gpec\WsdlToPhp\EnumType\Encoding::valueIsValid()
     */
    public function setHeadersEncoding(string $headersEncoding): self
    {
        // validation for constraint: enumeration
        if (!\Bni\Gpec\WsdlToPhp\EnumType\Encoding::valueIsValid($headersEncoding)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Bni\Gpec\WsdlToPhp\EnumType\Encoding', is_array($headersEncoding) ? implode(', ', $headersEncoding) : var_export($headersEncoding, true), implode(', ', \Bni\Gpec\WsdlToPhp\EnumType\Encoding::getValidValues())), __LINE__);
        }
        $this->headersEncoding = $headersEncoding;

        return $this;
    }
    /**
     * Get to value
     * @return string|null
     */
    public function getTo(): ?string
    {
        return $this->to;
    }
    /**
     * Set to value
     * @param string $to
     * @return \Bni\Gpec\WsdlToPhp\StructType\MessageInfoSender
     */
    public function setTo(?string $to = null): self
    {
        // validation for constraint: string
        if (!is_null($to) && !is_string($to)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($to, true), gettype($to)), __LINE__);
        }
        $this->to = $to;

        return $this;
    }
    /**
     * Get cc value
     * @return string|null
     */
    public function getCc(): ?string
    {
        return $this->cc;
    }
    /**
     * Set cc value
     * @param string $cc
     * @return \Bni\Gpec\WsdlToPhp\StructType\MessageInfoSender
     */
    public function setCc(?string $cc = null): self
    {
        // validation for constraint: string
        if (!is_null($cc) && !is_string($cc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cc, true), gettype($cc)), __LINE__);
        }
        $this->cc = $cc;

        return $this;
    }
    /**
     * Get bcc value
     * @return string|null
     */
    public function getBcc(): ?string
    {
        return $this->bcc;
    }
    /**
     * Set bcc value
     * @param string $bcc
     * @return \Bni\Gpec\WsdlToPhp\StructType\MessageInfoSender
     */
    public function setBcc(?string $bcc = null): self
    {
        // validation for constraint: string
        if (!is_null($bcc) && !is_string($bcc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bcc, true), gettype($bcc)), __LINE__);
        }
        $this->bcc = $bcc;

        return $this;
    }
    /**
     * Get headers value
     * @return \Bni\Gpec\WsdlToPhp\ArrayType\ArrayOfObjectHeaders|null
     */
    public function getHeaders(): ?\Bni\Gpec\WsdlToPhp\ArrayType\ArrayOfObjectHeaders
    {
        return $this->headers;
    }
    /**
     * Set headers value
     * @param \Bni\Gpec\WsdlToPhp\ArrayType\ArrayOfObjectHeaders $headers
     * @return \Bni\Gpec\WsdlToPhp\StructType\MessageInfoSender
     */
    public function setHeaders(?\Bni\Gpec\WsdlToPhp\ArrayType\ArrayOfObjectHeaders $headers = null): self
    {
        $this->headers = $headers;

        return $this;
    }
    /**
     * Get subject value
     * @return string|null
     */
    public function getSubject(): ?string
    {
        return $this->subject;
    }
    /**
     * Set subject value
     * @param string $subject
     * @return \Bni\Gpec\WsdlToPhp\StructType\MessageInfoSender
     */
    public function setSubject(?string $subject): self
    {
        // validation for constraint: string
        if (!is_null($subject) && !is_string($subject)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subject, true), gettype($subject)), __LINE__);
        }
        $this->subject = $subject;

        return $this;
    }
    /**
     * Get body value
     * @return string|null
     */
    public function getBody(): ?string
    {
        return $this->body;
    }
    /**
     * Set body value
     * @param string $body
     * @return \Bni\Gpec\WsdlToPhp\StructType\MessageInfoSender
     */
    public function setBody(?string $body): self
    {
        // validation for constraint: string
        if (!is_null($body) && !is_string($body)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($body, true), gettype($body)), __LINE__);
        }
        $this->body = $body;

        return $this;
    }
    /**
     * Get attachments value
     * @return \Bni\Gpec\WsdlToPhp\StructType\AttachmentSet|null
     */
    public function getAttachments(): ?\Bni\Gpec\WsdlToPhp\StructType\AttachmentSet
    {
        return $this->attachments;
    }
    /**
     * Set attachments value
     * @param \Bni\Gpec\WsdlToPhp\StructType\AttachmentSet $attachments
     * @return \Bni\Gpec\WsdlToPhp\StructType\MessageInfoSender
     */
    public function setAttachments(?\Bni\Gpec\WsdlToPhp\StructType\AttachmentSet $attachments): self
    {
        $this->attachments = $attachments;

        return $this;
    }
}
