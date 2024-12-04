<?php

declare(strict_types=1);

namespace Bni\Gpec\WsdlToPhp\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Client StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Client extends AbstractStructBase
{
    /**
     * The user
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string|null
     */
    protected ?string $user;
    /**
     * The password
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string|null
     */
    protected ?string $password;
    /**
     * Constructor method for Client
     * @uses Client::setUser()
     * @uses Client::setPassword()
     * @param string $user
     * @param string $password
     */
    public function __construct(?string $user, ?string $password)
    {
        $this
            ->setUser($user)
            ->setPassword($password);
    }
    /**
     * Get user value
     * @return string|null
     */
    public function getUser(): ?string
    {
        return $this->user;
    }
    /**
     * Set user value
     * @param string $user
     * @return \Bni\Gpec\WsdlToPhp\StructType\Client
     */
    public function setUser(?string $user): self
    {
        // validation for constraint: string
        if (!is_null($user) && !is_string($user)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($user, true), gettype($user)), __LINE__);
        }
        $this->user = $user;
        
        return $this;
    }
    /**
     * Get password value
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }
    /**
     * Set password value
     * @param string $password
     * @return \Bni\Gpec\WsdlToPhp\StructType\Client
     */
    public function setPassword(?string $password): self
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
        }
        $this->password = $password;
        
        return $this;
    }
}
