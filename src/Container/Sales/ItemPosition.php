<?php

namespace Aesislabs\BexioConnector\Container\Sales;

use Aesislabs\BexioConnector\Container\ContainerInterface;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class ItemPosition implements ContainerInterface
{
    /**
     * @var int
     * @SerializedName("id")
     * @Type("integer")
     */
    protected $id;

    /**
     * @SerializedName("amount")
     * @Type("string")
     */
    protected ?string $amount = null;

    /**
     * @var integer
     * @SerializedName("unit_id")
     * @Type("integer")
     */
    protected $unitId;

    /**
     * @var integer
     * @SerializedName("account_id")
     * @Type("integer")
     */
    protected $accountId;

    /**
     * @SerializedName("unit_name")
     * @Type("string")
     */
    protected ?string $unitName = null;

    /**
     * @var integer
     * @SerializedName("tax_id")
     * @Type("integer")
     */
    protected $taxId;

    /**
     * @SerializedName("tax_value")
     * @Type("string")
     */
    protected ?string $taxValue = null;

    /**
     * @var string
     * @SerializedName("text")
     * @Type("string")
     */
    protected $text;

    /**
     * @SerializedName("unit_price")
     * @Type("string")
     */
    protected ?string $unitPrice = null;

    /**
     * @var string
     * @SerializedName("discount_in_percent")
     * @Type("string")
     */
    protected $discountInPercent;

    /**
     * @SerializedName("position_total")
     * @Type("string")
     */
    protected ?string $positionTotal = null;

    /**
     * @var string
     * @SerializedName("pos")
     * @Type("string")
     */
    protected $pos;

    /**
     * @var integer
     * @SerializedName("internal_pos")
     * @Type("integer")
     */
    protected $internalPos;

    /**
     * @var boolean
     * @SerializedName("is_optional")
     * @Type("boolean")
     */
    protected $isOptional;

    /**
     * @var integer
     * @SerializedName("article_id")
     * @Type("integer")
     */
    protected $articleId;

    /**
     * @var string
     * @SerializedName("type")
     * @Type("string")
     */
    protected $type;

    /**
     * @var integer|null
     * @SerializedName("parent_id")
     * @Type("integer")
     */
    protected ?int $parentId;

    public function getId(): int
    {
        return $this->id;
    }

    public function getAmount(): ?string
    {
        return $this->amount;
    }

    public function getUnitId(): int
    {
        return $this->unitId;
    }

    public function getAccountId(): int
    {
        return $this->accountId;
    }

    public function getUnitName(): ?string
    {
        return $this->unitName;
    }

    public function getTaxId(): int
    {
        return $this->taxId;
    }

    public function getTaxValue(): ?string
    {
        return $this->taxValue;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function getUnitPrice(): ?string
    {
        return $this->unitPrice;
    }

    public function getDiscountInPercent(): ?string
    {
        return $this->discountInPercent;
    }

    public function getPositionTotal(): ?string
    {
        return $this->positionTotal;
    }

    public function getPos(): string
    {
        return $this->pos;
    }

    public function getInternalPos(): int
    {
        return $this->internalPos ?? 0;
    }

    public function isOptional(): bool
    {
        return $this->isOptional;
    }

    public function getArticleId(): int
    {
        return $this->articleId;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getParentId(): ?int
    {
        return $this->parentId;
    }
}
