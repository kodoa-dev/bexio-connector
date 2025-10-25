<?php

namespace Aesislabs\BexioConnector\Container\Accounting;

use Aesislabs\BexioConnector\Container\ContainerInterface;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class Account implements ContainerInterface
{
    /**
     * @var integer
     * @SerializedName("id")
     * @Type("integer")
     */
    protected $id;

    /**
     * @var string
     * @SerializedName("account_no")
     * @Type("string")
     */
    protected $accountNo;

    /**
     * @var string
     * @SerializedName("name")
     * @Type("string")
     */
    protected $name;

    /**
     * @var integer
     * @SerializedName("account_group_id")
     * @Type("integer")
     */
    protected $accountGroupId;

    /**
     * @var string
     * @SerializedName("account_type")
     * @Type("string")
     */
    protected $accountType;

    /**
     * @var integer
     * @SerializedName("tax_id")
     * @Type("integer")
     */
    protected $taxId;

    /**
     * @var boolean
     * @SerializedName("is_active")
     * @Type("boolean")
     */
    protected $isActive;

    /**
     * @var boolean
     * @SerializedName("is_locked")
     * @Type("boolean")
     */
    protected $isLocked;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getAccountNo(): string
    {
        return $this->accountNo;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return ?int
     */
    public function getAccountGroupId(): ?int
    {
        return $this->accountGroupId;
    }

    /**
     * @return string
     */
    public function getAccountType(): string
    {
        return $this->accountType;
    }

    /**
     * @return ?int
     */
    public function getTaxId(): ?int
    {
        return $this->taxId;
    }

    /**
     * @return bool
     */
    public function isActive(): bool
    {
        return $this->isActive;
    }

    /**
     * @return bool
     */
    public function isLocked(): bool
    {
        return $this->isLocked;
    }
}
