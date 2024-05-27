<?php

namespace Aesislabs\BexioConnector\Container\Items;

use Aesislabs\BexioConnector\Container\ContainerInterface;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class Item implements ContainerInterface
{
    /**
     * @SerializedName("id")
     * @Type("integer")
     */
    protected int $id;

    /**
     * @SerializedName("user_id")
     * @Type("integer")
     */
    protected int $userId;

    /**
     * @SerializedName("article_type_id")
     * @Type("integer")
     */
    protected ?int $articleTypeId;

    /**
     * @SerializedName("contact_id")
     * @Type("integer")
     */
    protected ?int $contactId;

    /**
     * @SerializedName("deliverer_code")
     * @Type("string")
     */
    protected ?string $delivererCode;

    /**
     * @SerializedName("deliverer_name")
     * @Type("string")
     */
    protected ?string $delivererName;

    /**
     * @SerializedName("deliverer_description")
     * @Type("string")
     */
    protected ?string $delivererDescription;

    /**
     * @SerializedName("intern_code")
     * @Type("string")
     */
    protected string $internCode;

    /**
     * @SerializedName("intern_name")
     * @Type("string")
     */
    protected string $internName;

    /**
     * @SerializedName("intern_description")
     * @Type("string")
     */
    protected ?string $internDescription;

    /**
     * @SerializedName("purchase_price")
     * @Type("float")
     */
    protected ?float $purchasePrice;

    /**
     * @SerializedName("sale_price")
     * @Type("float")
     */
    protected ?float $salePrice;

    /**
     * @SerializedName("purchase_total")
     * @Type("float")
     */
    protected ?float $purchaseTotal;

    /**
     * @SerializedName("sale_total")
     * @Type("float")
     */
    protected ?float $saleTotal;

    /**
     * @SerializedName("currency_id")
     * @Type("integer")
     */
    protected ?int $currencyId;

    /**
     * @SerializedName("tax_income_id")
     * @Type("integer")
     */
    protected ?int $taxIncomeId;

    /**
     * @SerializedName("tax_id")
     * @Type("integer")
     */
    protected ?int $taxId;

    /**
     * @SerializedName("tax_expense_id")
     * @Type("integer")
     */
    protected ?int $taxExpenseId;

    /**
     * @SerializedName("unit_id")
     * @Type("integer")
     */
    protected ?int $unitId;

    /**
     * @SerializedName("is_stock")
     * @Type("boolean")
     */
    protected bool $isStock;

    /**
     * @SerializedName("stock_id")
     * @Type("integer")
     */
    protected ?int $stockId;

    /**
     * @SerializedName("stock_place_id")
     * @Type("integer")
     */
    protected ?int $stockPlaceId;

    /**
     * @SerializedName("stock_nr")
     * @Type("integer")
     */
    protected int $stockNr;

    /**
     * @SerializedName("stock_min_nr")
     * @Type("integer")
     */
    protected int $stockMinNr;

    /**
     * @SerializedName("stock_reserved_nr")
     * @Type("integer")
     */
    protected int $stockReservedNr;

    /**
     * @SerializedName("stock_available_nr")
     * @Type("integer")
     */
    protected int $stockAvailableNr;

    /**
     * @SerializedName("stock_picked_nr")
     * @Type("integer")
     */
    protected int $stockPickedNr;

    /**
     * @SerializedName("stock_disposed_nr")
     * @Type("integer")
     */
    protected int $stockDisposedNr;

    /**
     * @SerializedName("stock_ordered_nr")
     * @Type("integer")
     */
    protected int $stockOrderedNr;

    /**
     * @SerializedName("width")
     * @Type("integer")
     */
    protected ?int $width;

    /**
     * @SerializedName("height")
     * @Type("integer")
     */
    protected ?int $height;

    /**
     * @SerializedName("weight")
     * @Type("integer")
     */
    protected ?int $weight;

    /**
     * @SerializedName("volume")
     * @Type("integer")
     */
    protected ?int $volume;

    /**
     * @SerializedName("html_text")
     * @Type("string")
     */
    protected ?string $htmlText;

    /**
     * @SerializedName("remarks")
     * @Type("string")
     */
    protected ?string $remarks;

    /**
     * @SerializedName("delivery_price")
     * @Type("float")
     */
    protected ?float $deliveryPrice;

    /**
     * @SerializedName("article_group_id")
     * @Type("integer")
     */
    protected ?int $articleGroupId;

    public function getId(): int
    {
        return $this->id;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function getArticleTypeId(): ?int
    {
        return $this->articleTypeId;
    }

    public function getContactId(): ?int
    {
        return $this->contactId;
    }

    public function getDelivererCode(): ?string
    {
        return $this->delivererCode;
    }

    public function getDelivererName(): ?string
    {
        return $this->delivererName;
    }

    public function getDelivererDescription(): ?string
    {
        return $this->delivererDescription;
    }

    public function getInternCode(): string
    {
        return $this->internCode;
    }

    public function getInternName(): string
    {
        return $this->internName;
    }

    public function getInternDescription(): ?string
    {
        return $this->internDescription;
    }

    public function getPurchasePrice(): ?float
    {
        return $this->purchasePrice;
    }

    public function getSalePrice(): ?float
    {
        return $this->salePrice;
    }

    public function getPurchaseTotal(): ?float
    {
        return $this->purchaseTotal;
    }

    public function getSaleTotal(): ?float
    {
        return $this->saleTotal;
    }

    public function getCurrencyId(): ?int
    {
        return $this->currencyId;
    }

    public function getTaxIncomeId(): ?int
    {
        return $this->taxIncomeId;
    }

    public function getTaxId(): ?int
    {
        return $this->taxId;
    }

    public function getTaxExpenseId(): ?int
    {
        return $this->taxExpenseId;
    }

    public function getUnitId(): ?int
    {
        return $this->unitId;
    }

    public function isStock(): bool
    {
        return $this->isStock;
    }

    public function getStockId(): ?int
    {
        return $this->stockId;
    }

    public function getStockPlaceId(): ?int
    {
        return $this->stockPlaceId;
    }

    public function getStockNr(): int
    {
        return $this->stockNr;
    }

    public function getStockMinNr(): int
    {
        return $this->stockMinNr;
    }

    public function getStockReservedNr(): int
    {
        return $this->stockReservedNr;
    }

    public function getStockAvailableNr(): int
    {
        return $this->stockAvailableNr;
    }

    public function getStockPickedNr(): int
    {
        return $this->stockPickedNr;
    }

    public function getStockDisposedNr(): int
    {
        return $this->stockDisposedNr;
    }

    public function getStockOrderedNr(): int
    {
        return $this->stockOrderedNr;
    }

    public function getWidth(): ?int
    {
        return $this->width;
    }

    public function getHeight(): ?int
    {
        return $this->height;
    }

    public function getWeight(): ?int
    {
        return $this->weight;
    }

    public function getVolume(): ?int
    {
        return $this->volume;
    }

    public function getHtmlText(): ?string
    {
        return $this->htmlText;
    }

    public function getRemarks(): ?string
    {
        return $this->remarks;
    }

    public function getDeliveryPrice(): ?float
    {
        return $this->deliveryPrice;
    }

    public function getArticleGroupId(): ?int
    {
        return $this->articleGroupId;
    }
}
