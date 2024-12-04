<?php

declare(strict_types=1);

namespace Bni\Gpec\WsdlToPhp\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BaseRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
abstract class BaseRequest extends AbstractStructBase
{
    /**
     * The client
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \Bni\Gpec\WsdlToPhp\StructType\Client|null
     */
    protected ?\Bni\Gpec\WsdlToPhp\StructType\Client $client;
    /**
     * The folder
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string|null
     */
    protected ?string $folder;
    /**
     * Constructor method for BaseRequest
     * @param \Bni\Gpec\WsdlToPhp\StructType\Client $client
     * @param string $folder
     * @uses BaseRequest::setClient()
     * @uses BaseRequest::setFolder()
     */
    public function __construct(?\Bni\Gpec\WsdlToPhp\StructType\Client $client, ?string $folder)
    {
        $this
            ->setClient($client)
            ->setFolder($folder);
    }
    /**
     * Get client value
     * @return \Bni\Gpec\WsdlToPhp\StructType\Client|null
     */
    public function getClient(): ?\Bni\Gpec\WsdlToPhp\StructType\Client
    {
        return $this->client;
    }
    /**
     * Set client value
     * @param \Bni\Gpec\WsdlToPhp\StructType\Client $client
     * @return \Bni\Gpec\WsdlToPhp\StructType\BaseRequest
     */
    public function setClient(?\Bni\Gpec\WsdlToPhp\StructType\Client $client): self
    {
        $this->client = $client;

        return $this;
    }
    /**
     * Get folder value
     * @return string|null
     */
    public function getFolder(): ?string
    {
        return $this->folder;
    }
    /**
     * Set folder value
     * @param string $folder
     * @return \Bni\Gpec\WsdlToPhp\StructType\BaseRequest
     */
    public function setFolder(?string $folder): self
    {
        // validation for constraint: string
        if (!is_null($folder) && !is_string($folder)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($folder, true), gettype($folder)), __LINE__);
        }
        $this->folder = $folder;

        return $this;
    }
}
