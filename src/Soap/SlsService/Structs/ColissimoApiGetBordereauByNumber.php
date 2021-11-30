<?php

declare(strict_types=1);

namespace SengentoBV\ColissimoSdk\Soap\SlsService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getBordereauByNumber Structs
 * Meta information extracted from the WSDL
 * - type: tns:getBordereauByNumber
 * @package ColissimoApi
 * @subpackage Structs
 */
class ColissimoApiGetBordereauByNumber extends AbstractStructBase
{
    /**
     * The contractNumber
     * @var string|null
     */
    protected ?string $contractNumber = null;
    /**
     * The password
     * @var string|null
     */
    protected ?string $password = null;
    /**
     * The bordereauNumber
     * @var string|null
     */
    protected ?string $bordereauNumber = null;
    /**
     * Constructor method for getBordereauByNumber
     * @uses ColissimoApiGetBordereauByNumber::setContractNumber()
     * @uses ColissimoApiGetBordereauByNumber::setPassword()
     * @uses ColissimoApiGetBordereauByNumber::setBordereauNumber()
     * @param string $contractNumber
     * @param string $password
     * @param string $bordereauNumber
     */
    public function __construct(?string $contractNumber = null, ?string $password = null, ?string $bordereauNumber = null)
    {
        $this
            ->setContractNumber($contractNumber)
            ->setPassword($password)
            ->setBordereauNumber($bordereauNumber);
    }
    /**
     * Get contractNumber value
     * @return string|null
     */
    public function getContractNumber(): ?string
    {
        return $this->contractNumber;
    }
    /**
     * Set contractNumber value
     * @param string $contractNumber
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGetBordereauByNumber
     */
    public function setContractNumber(?string $contractNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($contractNumber) && !is_string($contractNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contractNumber, true), gettype($contractNumber)), __LINE__);
        }
        $this->contractNumber = $contractNumber;
        
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
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGetBordereauByNumber
     */
    public function setPassword(?string $password = null): self
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
        }
        $this->password = $password;
        
        return $this;
    }
    /**
     * Get bordereauNumber value
     * @return string|null
     */
    public function getBordereauNumber(): ?string
    {
        return $this->bordereauNumber;
    }
    /**
     * Set bordereauNumber value
     * @param string $bordereauNumber
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGetBordereauByNumber
     */
    public function setBordereauNumber(?string $bordereauNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($bordereauNumber) && !is_string($bordereauNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bordereauNumber, true), gettype($bordereauNumber)), __LINE__);
        }
        $this->bordereauNumber = $bordereauNumber;
        
        return $this;
    }
}
