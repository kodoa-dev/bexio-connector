<?php

namespace Aesislabs\BexioConnector\Container\Sales;

use Aesislabs\BexioConnector\Container\ContainerInterface;
use JMS\Serializer\Annotation as Serializer;
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
     * @Serializer\Groups({"write"})
     * @Type("string")
     */
    protected ?string $amount = null;

    /**
     * @var integer
     * @SerializedName("unit_id")
     * @Serializer\Groups({"write"})
     * @Type("integer")
     */
    protected ?int $unitId = null;

    /**
     * @var integer
     * @SerializedName("account_id")
     * @Serializer\Groups({"write"})
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
     * @Serializer\Groups({"write"})
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
     * @Serializer\Groups({"write"})
     * @Type("string")
     */
    protected ?string $value = null;

    /**
     * @var string
     * @SerializedName("text")
     * @Serializer\Groups({"write"})
     * @Type("string")
     */
    protected ?string $text = null;

    /**
     * @SerializedName("unit_price")
     * @Serializer\SkipWhenEmpty
     * @Serializer\Groups({"write"})
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
     * @Serializer\Groups({"write"})
     * @Type("boolean")
     */
    protected $isOptional =false;

    /**
     * @var integer
     * @SerializedName("article_id")
     * @Serializer\Groups({"write"})
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
     * @Serializer\Groups({"write"})
     * @Type("string")
     */
    protected $type;

    /**
     * @var integer|null
     * @SerializedName("parent_id")
     * @Serializer\Groups({"write"})
     * @Type("integer")
     */
    protected ?int $parentId = null;

    public function getId(): ?int
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

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function setAmount(?string $amount): void
    {
        $this->amount = $amount;
    }

    public function setUnitId(?int $unitId): void
    {
        $this->unitId = $unitId;
    }

    public function setAccountId(?int $accountId): void
    {
        $this->accountId = $accountId;
    }

    public function setUnitName(?string $unitName): void
    {
        $this->unitName = $unitName;
    }

    public function setTaxId(?int $taxId): void
    {
        $this->taxId = $taxId;
    }

    public function setTaxValue(?string $taxValue): void
    {
        $this->taxValue = $taxValue;
    }

    public function setValue(?string $value): void
    {
        $this->value = $value;
    }

    public function setText(?string $text): void
    {
        $this->text = $text;
    }

    public function setUnitPrice(?string $unitPrice): void
    {
        $this->unitPrice = $unitPrice;
    }

    public function setDiscountInPercent(?string $discountInPercent): void
    {
        $this->discountInPercent = $discountInPercent;
    }

    public function setPositionTotal(?string $positionTotal): void
    {
        $this->positionTotal = $positionTotal;
    }

    public function setPos(?string $pos): void
    {
        $this->pos = $pos;
    }

    public function setInternalPos(?int $internalPos): void
    {
        $this->internalPos = $internalPos;
    }

    public function setIsOptional(bool $isOptional): void
    {
        $this->isOptional = $isOptional;
    }

    public function setArticleId(?int $articleId): void
    {
        $this->articleId = $articleId;
    }

    public function setShowPosNr(bool $showPosNr): void
    {
        $this->showPosNr = $showPosNr;
    }

    public function setShowPosPrices(bool $showPosPrices): void
    {
        $this->showPosPrices = $showPosPrices;
    }

    public function setIsPercentual(bool $isPercentual): void
    {
        $this->isPercentual = $isPercentual;
    }

    public function setDiscountTotal(?string $discountTotal): void
    {
        $this->discountTotal = $discountTotal;
    }

    public function setTotalSum(?string $total_sum): void
    {
        $this->total_sum = $total_sum;
    }

    public function setType(string $type): void
    {
        $this->type = $type;
    }

    public function setParentId(?int $parentId): void
    {
        $this->parentId = $parentId;
    }
}
