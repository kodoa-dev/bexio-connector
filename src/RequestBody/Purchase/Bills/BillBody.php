<?php

namespace Aesislabs\BexioConnector\RequestBody\Purchase\Bills;

use Aesislabs\BexioConnector\RequestBody\AbstractBody;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class BillBody extends AbstractBody
{
    /**
     * @var integer
     * @SerializedName("user_id")
     * @Type("integer")
     */
    protected $userId;

    /**
     * @var integer
     * @SerializedName("article_type_id")
     * @Type("integer")
     */
    protected $articleTypeId;

    /**
     * @var integer|null
     * @SerializedName("contact_id")
     * @Type("integer")
     */
    protected $contactId;

    /**
     * @var string|null
     * @SerializedName("deliverer_code")
     * @Type("string")
     */
    protected $delivererCode;

    /**
     * @var string|null
     * @SerializedName("deliverer_name")
     * @Type("string")
     */
    protected $delivererName;

    /**
     * @var string|null
     * @SerializedName("deliverer_description")
     * @Type("string")
     */
    protected $delivererDescription;

    /**
     * @var string
     * @SerializedName("intern_code")
     * @Type("string")
     */
    protected $internCode;

    /**
     * @var string
     * @SerializedName("intern_name")
     * @Type("string")
     */
    protected $internName;

    /**
     * @var string|null
     * @SerializedName("intern_description")
     * @Type("string")
     */
    protected $internDescription;

    /**
     * @var float|null
     * @SerializedName("purchase_price")
     * @Type("float")
     */
    protected $purchasePrice;

    /**
     * @var float|null
     * @SerializedName("sale_price")
     * @Type("float")
     */
    protected $salePrice;

    /**
     * @var float|null
     * @SerializedName("purchase_total")
     * @Type("float")
     */
    protected $purchaseTotal;

    /**
     * @var float|null
     * @SerializedName("sale_total")
     * @Type("float")
     */
    protected $saleTotal;

    /**
     * @var integer|null
     * @SerializedName("currency_id")
     * @Type("integer")
     */
    protected $currencyId;

    /**
     * @var integer|null
     * @SerializedName("tax_income_id")
     * @Type("integer")
     */
    protected $taxIncomeId;

    /**
     * @var integer|null
     * @SerializedName("tax_id")
     * @Type("integer")
     */
    protected $taxId;

    /**
     * @var integer|null
     * @SerializedName("tax_expense_id")
     * @Type("integer")
     */
    protected $taxExpenseId;

    /**
     * @var integer|null
     * @SerializedName("unit_id")
     * @Type("integer")
     */
    protected $unitId;

    /**
     * @var boolean
     * @SerializedName("is_stock")
     * @Type("boolean")
     */
    protected $isStock;

    /**
     * @var integer|null
     * @SerializedName("stock_id")
     * @Type("integer")
     */
    protected $stockId;

    /**
     * @var integer|null
     * @SerializedName("stock_place_id")
     * @Type("integer")
     */
    protected $stockPlaceId;

    /**
     * @var integer
     * @SerializedName("stock_nr")
     * @Type("integer")
     */
    protected $stockNr;

    /**
     * @var integer
     * @SerializedName("stock_min_nr")
     * @Type("integer")
     */
    protected $stockMinNr;

    /**
     * @var integer|null
     * @SerializedName("width")
     * @Type("integer")
     */
    protected $width;

    /**
     * @var integer|null
     * @SerializedName("height")
     * @Type("integer")
     */
    protected $height;

    /**
     * @var integer|null
     * @SerializedName("weight")
     * @Type("integer")
     */
    protected $weight;

    /**
     * @var integer|null
     * @SerializedName("volume")
     * @Type("integer")
     */
    protected $volume;

    /**
     * @var string|null
     * @SerializedName("html_text")
     * @Type("string")
     */
    protected $htmlText;

    /**
     * @var string|null
     * @SerializedName("remarks")
     * @Type("string")
     */
    protected $remarks;

    /**
     * @var float|null
     * @SerializedName("delivery_price")
     * @Type("float")
     */
    protected $deliveryPrice;

    /**
     * @var integer|null
     * @SerializedName("article_group_id")
     * @Type("integer")
     */
    protected $articleGroupId;

    /**
     * @param int $userId
     * @return BillBody
     */
    public function setUserId(int $userId): BillBody
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @param int $articleTypeId
     * @return BillBody
     */
    public function setArticleTypeId(int $articleTypeId): BillBody
    {
        $this->articleTypeId = $articleTypeId;
        return $this;
    }

    /**
     * @param int|null $contactId
     * @return BillBody
     */
    public function setContactId(?int $contactId): BillBody
    {
        $this->contactId = $contactId;
        return $this;
    }

    /**
     * @param string|null $delivererCode
     * @return BillBody
     */
    public function setDelivererCode(?string $delivererCode): BillBody
    {
        $this->delivererCode = $delivererCode;
        return $this;
    }

    /**
     * @param string|null $delivererName
     * @return BillBody
     */
    public function setDelivererName(?string $delivererName): BillBody
    {
        $this->delivererName = $delivererName;
        return $this;
    }

    /**
     * @param string|null $delivererDescription
     * @return BillBody
     */
    public function setDelivererDescription(?string $delivererDescription): BillBody
    {
        $this->delivererDescription = $delivererDescription;
        return $this;
    }

    /**
     * @param string $internCode
     * @return BillBody
     */
    public function setInternCode(string $internCode): BillBody
    {
        $this->internCode = $internCode;
        return $this;
    }

    /**
     * @param string $internName
     * @return BillBody
     */
    public function setInternName(string $internName): BillBody
    {
        $this->internName = $internName;
        return $this;
    }

    /**
     * @param string|null $internDescription
     * @return BillBody
     */
    public function setInternDescription(?string $internDescription): BillBody
    {
        $this->internDescription = $internDescription;
        return $this;
    }

    /**
     * @param float|null $purchasePrice
     * @return BillBody
     */
    public function setPurchasePrice(?float $purchasePrice): BillBody
    {
        $this->purchasePrice = $purchasePrice;
        return $this;
    }

    /**
     * @param float|null $salePrice
     * @return BillBody
     */
    public function setSalePrice(?float $salePrice): BillBody
    {
        $this->salePrice = $salePrice;
        return $this;
    }

    /**
     * @param float|null $purchaseTotal
     * @return BillBody
     */
    public function setPurchaseTotal(?float $purchaseTotal): BillBody
    {
        $this->purchaseTotal = $purchaseTotal;
        return $this;
    }

    /**
     * @param float|null $saleTotal
     * @return BillBody
     */
    public function setSaleTotal(?float $saleTotal): BillBody
    {
        $this->saleTotal = $saleTotal;
        return $this;
    }

    /**
     * @param int|null $currencyId
     * @return BillBody
     */
    public function setCurrencyId(?int $currencyId): BillBody
    {
        $this->currencyId = $currencyId;
        return $this;
    }

    /**
     * @param int|null $taxIncomeId
     * @return BillBody
     */
    public function setTaxIncomeId(?int $taxIncomeId): BillBody
    {
        $this->taxIncomeId = $taxIncomeId;
        return $this;
    }

    /**
     * @param int|null $taxId
     * @return BillBody
     */
    public function setTaxId(?int $taxId): BillBody
    {
        $this->taxId = $taxId;
        return $this;
    }

    /**
     * @param int|null $taxExpenseId
     * @return BillBody
     */
    public function setTaxExpenseId(?int $taxExpenseId): BillBody
    {
        $this->taxExpenseId = $taxExpenseId;
        return $this;
    }

    /**
     * @param int|null $unitId
     * @return BillBody
     */
    public function setUnitId(?int $unitId): BillBody
    {
        $this->unitId = $unitId;
        return $this;
    }

    /**
     * @param bool $isStock
     * @return BillBody
     */
    public function setIsStock(bool $isStock): BillBody
    {
        $this->isStock = $isStock;
        return $this;
    }

    /**
     * @param int|null $stockId
     * @return BillBody
     */
    public function setStockId(?int $stockId): BillBody
    {
        $this->stockId = $stockId;
        return $this;
    }

    /**
     * @param int|null $stockPlaceId
     * @return BillBody
     */
    public function setStockPlaceId(?int $stockPlaceId): BillBody
    {
        $this->stockPlaceId = $stockPlaceId;
        return $this;
    }

    /**
     * @param int $stockNr
     * @return BillBody
     */
    public function setStockNr(int $stockNr): BillBody
    {
        $this->stockNr = $stockNr;
        return $this;
    }

    /**
     * @param int $stockMinNr
     * @return BillBody
     */
    public function setStockMinNr(int $stockMinNr): BillBody
    {
        $this->stockMinNr = $stockMinNr;
        return $this;
    }

    /**
     * @param int|null $width
     * @return BillBody
     */
    public function setWidth(?int $width): BillBody
    {
        $this->width = $width;
        return $this;
    }

    /**
     * @param int|null $height
     * @return BillBody
     */
    public function setHeight(?int $height): BillBody
    {
        $this->height = $height;
        return $this;
    }

    /**
     * @param int|null $weight
     * @return BillBody
     */
    public function setWeight(?int $weight): BillBody
    {
        $this->weight = $weight;
        return $this;
    }

    /**
     * @param int|null $volume
     * @return BillBody
     */
    public function setVolume(?int $volume): BillBody
    {
        $this->volume = $volume;
        return $this;
    }

    /**
     * @param string|null $htmlText
     * @return BillBody
     */
    public function setHtmlText(?string $htmlText): BillBody
    {
        $this->htmlText = $htmlText;
        return $this;
    }

    /**
     * @param string|null $remarks
     * @return BillBody
     */
    public function setRemarks(?string $remarks): BillBody
    {
        $this->remarks = $remarks;
        return $this;
    }

    /**
     * @param float|null $deliveryPrice
     * @return BillBody
     */
    public function setDeliveryPrice(?float $deliveryPrice): BillBody
    {
        $this->deliveryPrice = $deliveryPrice;
        return $this;
    }

    /**
     * @param int|null $articleGroupId
     * @return BillBody
     */
    public function setArticleGroupId(?int $articleGroupId): BillBody
    {
        $this->articleGroupId = $articleGroupId;
        return $this;
    }
}
