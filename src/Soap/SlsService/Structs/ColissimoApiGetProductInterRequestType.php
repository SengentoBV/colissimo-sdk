<?php

declare(strict_types=1);

namespace SengentoBV\ColissimoSdk\Soap\SlsService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetProductInterRequestType Structs
 * @package ColissimoApi
 * @subpackage Structs
 */
class ColissimoApiGetProductInterRequestType extends AbstractStructBase
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
     * The productCode
     * @var string|null
     */
    protected ?string $productCode = null;
    /**
     * The insurance
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $insurance = null;
    /**
     * The nonMachinable
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $nonMachinable = null;
    /**
     * The returnReceipt
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $returnReceipt = null;
    /**
     * The countryCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $countryCode = null;
    /**
     * The zipCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $zipCode = null;
    /**
     * The city
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $city = null;
    /**
     * Constructor method for GetProductInterRequestType
     * @uses ColissimoApiGetProductInterRequestType::setContractNumber()
     * @uses ColissimoApiGetProductInterRequestType::setPassword()
     * @uses ColissimoApiGetProductInterRequestType::setProductCode()
     * @uses ColissimoApiGetProductInterRequestType::setInsurance()
     * @uses ColissimoApiGetProductInterRequestType::setNonMachinable()
     * @uses ColissimoApiGetProductInterRequestType::setReturnReceipt()
     * @uses ColissimoApiGetProductInterRequestType::setCountryCode()
     * @uses ColissimoApiGetProductInterRequestType::setZipCode()
     * @uses ColissimoApiGetProductInterRequestType::setCity()
     * @param string $contractNumber
     * @param string $password
     * @param string $productCode
     * @param bool $insurance
     * @param bool $nonMachinable
     * @param bool $returnReceipt
     * @param string $countryCode
     * @param string $zipCode
     * @param string $city
     */
    public function __construct(?string $contractNumber = null, ?string $password = null, ?string $productCode = null, ?bool $insurance = null, ?bool $nonMachinable = null, ?bool $returnReceipt = null, ?string $countryCode = null, ?string $zipCode = null, ?string $city = null)
    {
        $this
            ->setContractNumber($contractNumber)
            ->setPassword($password)
            ->setProductCode($productCode)
            ->setInsurance($insurance)
            ->setNonMachinable($nonMachinable)
            ->setReturnReceipt($returnReceipt)
            ->setCountryCode($countryCode)
            ->setZipCode($zipCode)
            ->setCity($city);
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
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGetProductInterRequestType
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
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGetProductInterRequestType
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
     * Get productCode value
     * @return string|null
     */
    public function getProductCode(): ?string
    {
        return $this->productCode;
    }
    /**
     * Set productCode value
     * @param string $productCode
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGetProductInterRequestType
     */
    public function setProductCode(?string $productCode = null): self
    {
        // validation for constraint: string
        if (!is_null($productCode) && !is_string($productCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productCode, true), gettype($productCode)), __LINE__);
        }
        $this->productCode = $productCode;
        
        return $this;
    }
    /**
     * Get insurance value
     * @return bool|null
     */
    public function getInsurance(): ?bool
    {
        return $this->insurance;
    }
    /**
     * Set insurance value
     * @param bool $insurance
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGetProductInterRequestType
     */
    public function setInsurance(?bool $insurance = null): self
    {
        // validation for constraint: boolean
        if (!is_null($insurance) && !is_bool($insurance)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($insurance, true), gettype($insurance)), __LINE__);
        }
        $this->insurance = $insurance;
        
        return $this;
    }
    /**
     * Get nonMachinable value
     * @return bool|null
     */
    public function getNonMachinable(): ?bool
    {
        return $this->nonMachinable;
    }
    /**
     * Set nonMachinable value
     * @param bool $nonMachinable
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGetProductInterRequestType
     */
    public function setNonMachinable(?bool $nonMachinable = null): self
    {
        // validation for constraint: boolean
        if (!is_null($nonMachinable) && !is_bool($nonMachinable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($nonMachinable, true), gettype($nonMachinable)), __LINE__);
        }
        $this->nonMachinable = $nonMachinable;
        
        return $this;
    }
    /**
     * Get returnReceipt value
     * @return bool|null
     */
    public function getReturnReceipt(): ?bool
    {
        return $this->returnReceipt;
    }
    /**
     * Set returnReceipt value
     * @param bool $returnReceipt
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGetProductInterRequestType
     */
    public function setReturnReceipt(?bool $returnReceipt = null): self
    {
        // validation for constraint: boolean
        if (!is_null($returnReceipt) && !is_bool($returnReceipt)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($returnReceipt, true), gettype($returnReceipt)), __LINE__);
        }
        $this->returnReceipt = $returnReceipt;
        
        return $this;
    }
    /**
     * Get countryCode value
     * @return string|null
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }
    /**
     * Set countryCode value
     * @param string $countryCode
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGetProductInterRequestType
     */
    public function setCountryCode(?string $countryCode = null): self
    {
        // validation for constraint: string
        if (!is_null($countryCode) && !is_string($countryCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countryCode, true), gettype($countryCode)), __LINE__);
        }
        $this->countryCode = $countryCode;
        
        return $this;
    }
    /**
     * Get zipCode value
     * @return string|null
     */
    public function getZipCode(): ?string
    {
        return $this->zipCode;
    }
    /**
     * Set zipCode value
     * @param string $zipCode
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGetProductInterRequestType
     */
    public function setZipCode(?string $zipCode = null): self
    {
        // validation for constraint: string
        if (!is_null($zipCode) && !is_string($zipCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zipCode, true), gettype($zipCode)), __LINE__);
        }
        $this->zipCode = $zipCode;
        
        return $this;
    }
    /**
     * Get city value
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->city;
    }
    /**
     * Set city value
     * @param string $city
     * @return \SengentoBV\ColissimoSdk\Soap\SlsService\Structs\ColissimoApiGetProductInterRequestType
     */
    public function setCity(?string $city = null): self
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($city, true), gettype($city)), __LINE__);
        }
        $this->city = $city;
        
        return $this;
    }
}
