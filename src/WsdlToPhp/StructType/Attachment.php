<?php

declare(strict_types=1);

namespace Bni\Gpec\WsdlToPhp\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Attachment StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Attachment extends AbstractStructBase
{
    /**
     * The id
     * Meta information extracted from the WSDL
     * - base: s:string
     * - maxOccurs: 1
     * - minOccurs: 1
     * - pattern: [0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}
     * @var string
     */
    protected string $id;
    /**
     * The size
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $size;
    /**
     * The requestId
     * Meta information extracted from the WSDL
     * - base: s:string
     * - maxOccurs: 1
     * - minOccurs: 1
     * - pattern: [0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}
     * @var string
     */
    protected string $requestId;
    /**
     * The isBodyEmbedded
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    protected bool $isBodyEmbedded;
    /**
     * The name
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The fileName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $fileName = null;
    /**
     * The fileData
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $fileData = null;
    /**
     * Constructor method for Attachment
     * @uses Attachment::setId()
     * @uses Attachment::setSize()
     * @uses Attachment::setRequestId()
     * @uses Attachment::setIsBodyEmbedded()
     * @uses Attachment::setName()
     * @uses Attachment::setFileName()
     * @uses Attachment::setFileData()
     * @param string $id
     * @param int $size
     * @param string $requestId
     * @param bool $isBodyEmbedded
     * @param string $name
     * @param string $fileName
     * @param string $fileData
     */
    public function __construct(string $id, int $size, string $requestId, bool $isBodyEmbedded, ?string $name = null, ?string $fileName = null, ?string $fileData = null)
    {
        $this
            ->setId($id)
            ->setSize($size)
            ->setRequestId($requestId)
            ->setIsBodyEmbedded($isBodyEmbedded)
            ->setName($name)
            ->setFileName($fileName)
            ->setFileData($fileData);
    }
    /**
     * Get id value
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $id
     * @return \Bni\Gpec\WsdlToPhp\StructType\Attachment
     */
    public function setId(string $id): self
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        // validation for constraint: pattern([0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12})
        if (!is_null($id) && !preg_match('/[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}/', (string) $id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}/', var_export($id, true)), __LINE__);
        }
        $this->id = $id;
        
        return $this;
    }
    /**
     * Get size value
     * @return int
     */
    public function getSize(): int
    {
        return $this->size;
    }
    /**
     * Set size value
     * @param int $size
     * @return \Bni\Gpec\WsdlToPhp\StructType\Attachment
     */
    public function setSize(int $size): self
    {
        // validation for constraint: int
        if (!is_null($size) && !(is_int($size) || ctype_digit($size))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($size, true), gettype($size)), __LINE__);
        }
        $this->size = $size;
        
        return $this;
    }
    /**
     * Get requestId value
     * @return string
     */
    public function getRequestId(): string
    {
        return $this->requestId;
    }
    /**
     * Set requestId value
     * @param string $requestId
     * @return \Bni\Gpec\WsdlToPhp\StructType\Attachment
     */
    public function setRequestId(string $requestId): self
    {
        // validation for constraint: string
        if (!is_null($requestId) && !is_string($requestId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($requestId, true), gettype($requestId)), __LINE__);
        }
        // validation for constraint: pattern([0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12})
        if (!is_null($requestId) && !preg_match('/[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}/', (string) $requestId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}/', var_export($requestId, true)), __LINE__);
        }
        $this->requestId = $requestId;
        
        return $this;
    }
    /**
     * Get isBodyEmbedded value
     * @return bool
     */
    public function getIsBodyEmbedded(): bool
    {
        return $this->isBodyEmbedded;
    }
    /**
     * Set isBodyEmbedded value
     * @param bool $isBodyEmbedded
     * @return \Bni\Gpec\WsdlToPhp\StructType\Attachment
     */
    public function setIsBodyEmbedded(bool $isBodyEmbedded): self
    {
        // validation for constraint: boolean
        if (!is_null($isBodyEmbedded) && !is_bool($isBodyEmbedded)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isBodyEmbedded, true), gettype($isBodyEmbedded)), __LINE__);
        }
        $this->isBodyEmbedded = $isBodyEmbedded;
        
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \Bni\Gpec\WsdlToPhp\StructType\Attachment
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;
        
        return $this;
    }
    /**
     * Get fileName value
     * @return string|null
     */
    public function getFileName(): ?string
    {
        return $this->fileName;
    }
    /**
     * Set fileName value
     * @param string $fileName
     * @return \Bni\Gpec\WsdlToPhp\StructType\Attachment
     */
    public function setFileName(?string $fileName = null): self
    {
        // validation for constraint: string
        if (!is_null($fileName) && !is_string($fileName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fileName, true), gettype($fileName)), __LINE__);
        }
        $this->fileName = $fileName;
        
        return $this;
    }
    /**
     * Get fileData value
     * @return string|null
     */
    public function getFileData(): ?string
    {
        return $this->fileData;
    }
    /**
     * Set fileData value
     * @param string $fileData
     * @return \Bni\Gpec\WsdlToPhp\StructType\Attachment
     */
    public function setFileData(?string $fileData = null): self
    {
        // validation for constraint: string
        if (!is_null($fileData) && !is_string($fileData)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fileData, true), gettype($fileData)), __LINE__);
        }
        $this->fileData = $fileData;
        
        return $this;
    }
}
