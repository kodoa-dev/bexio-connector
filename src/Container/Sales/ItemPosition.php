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
    protected ?int $unitId = null;

    /**
     * @var integer
     * @SerializedName("account_id")
     * @Type("integer")
     */
    protected ?int $accountId = null;

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
    protected ?int $taxId = null;

    /**
     * @SerializedName("tax_value")
     * @Type("string")
     */
    protected ?string $taxValue = null;

    /**
     * @var string
     * @SerializedName("value")
     * @Type("string")
     */
    protected ?string $value = null;

    /**
     * @var string
     * @SerializedName("text")
     * @Type("string")
     */
    protected ?string $text = null;

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
    protected ?string $discountInPercent = null;

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
    protected ?int $internalPos = null;

    /**
     * @var boolean
     * @SerializedName("is_optional")
     * @Type("boolean")
     */
    protected $isOptional =false;

    /**
     * @var integer
     * @SerializedName("article_id")
     * @Type("integer")
     */
    protected ?int $articleId = null;

    /**
     * @var boolean
     * @SerializedName("show_pos_nr")
     * @Type("boolean")
     */
    protected bool $showPosNr = false;

    /**
     * @var boolean
     * @SerializedName("show_pos_prices")
     * @Type("boolean")
     */
    protected bool $showPosPrices = false;

    /**
     * @var boolean
     * @SerializedName("is_percentual")
     * @Type("boolean")
     */
    protected bool $isPercentual = false;

    /**
     * @var string
     * @SerializedName("discount_total")
     * @Type("string")
     */
    protected ?string $discountTotal = null;

    /**
     * @var string
     * @SerializedName("total_sum")
     * @Type("string")
     */
    protected ?string $total_sum = null;

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
    protected ?int $parentId = null;

    public function getId(): int
    {
        return $this->id;
    }

    public function getAmount(): ?string
    {
        return $this->amount;
    }

    public function getUnitId(): ?int
    {
        return $this->unitId;
    }

    public function getAccountId(): ?int
    {
        return $this->accountId;
    }

    public function getUnitName(): ?string
    {
        return $this->unitName;
    }

    public function getTaxId(): ?int
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

    public function getPos(): ?string
    {
        return $this->pos;
    }

    public function getInternalPos(): ?int
    {
        return $this->internalPos ?? 0;
    }

    public function isOptional(): bool
    {
        return $this->isOptional;
    }

    public function getArticleId(): ?int
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

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function isShowPosNr(): bool
    {
        return $this->showPosNr;
    }

    public function isShowPosPrices(): bool
    {
        return $this->showPosPrices;
    }

    public function isPercentual(): bool
    {
        return $this->isPercentual;
    }

    public function getDiscountTotal(): ?string
    {
        return $this->discountTotal;
    }

    public function getTotalSum(): ?string
    {
        return $this->total_sum;
    }
}
