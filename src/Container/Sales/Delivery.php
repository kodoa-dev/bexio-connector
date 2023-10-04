<?php

namespace Aesislabs\BexioConnector\Container\Sales;

use DateTime;
use Aesislabs\BexioConnector\Container\ContainerInterface;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class Delivery implements ContainerInterface
{
    public const ITEM_STATUSES = [
        10 => 'Draft',
        18 => 'Done',
        20 => 'Canceled',
    ];

    /**
     * @var int
     * @SerializedName("id")
     * @Type("integer")
     */
    protected $id;

    /**
     * @var string
     * @SerializedName("document_nr")
     * @Type("string")
     */
    protected $documentNr;

    /**
     * @var string|null
     * @SerializedName("title")
     * @Type("string")
     */
    protected $title;

    /**
     * @var integer|null
     * @SerializedName("contact_id")
     * @Type("integer")
     */
    protected $contactId;

    /**
     * @var integer|null
     * @SerializedName("contact_sub_id")
     * @Type("integer")
     */
    protected $contactSubId;

    /**
     * @var integer|null
     * @SerializedName("user_id")
     * @Type("integer")
     */
    protected $userId;

    /**
     * @var integer
     * @SerializedName("logopaper_id")
     * @Type("integer")
     */
    protected $logopaperId;

    /**
     * @var integer
     * @SerializedName("language_id")
     * @Type("integer")
     */
    protected $languageId;

    /**
     * @var integer
     * @SerializedName("bank_account_id")
     * @Type("integer")
     */
    protected $bankAccountId;

    /**
     * @var integer
     * @SerializedName("currency_id")
     * @Type("integer")
     */
    protected $currencyId;

    /**
     * @var string
     * @SerializedName("header")
     * @Type("string")
     */
    protected $header;

    /**
     * @var string
     * @SerializedName("footer")
     * @Type("string")
     */
    protected $footer;

    /**
     * @var string
     * @SerializedName("total_gross")
     * @Type("string")
     */
    protected $totalGross;

    /**
     * @var string
     * @SerializedName("total_net")
     * @Type("string")
     */
    protected $totalNet;

    /**
     * @var string
     * @SerializedName("total_taxes")
     * @Type("string")
     */
    protected $totalTaxes;

    /**
     * @var string
     * @SerializedName("total")
     * @Type("string")
     */
    protected $total;

    /**
     * @var float
     * @SerializedName("total_rounding_difference")
     * @Type("float")
     */
    protected $totalRoundingDifference;

    /**
     * @var integer
     * @SerializedName("mwst_type")
     * @Type("integer")
     */
    protected $mwstType;

    /**
     * @var boolean
     * @SerializedName("mwst_is_net")
     * @Type("boolean")
     */
    protected $mwstIsNet;

    /**
     * @var DateTime
     * @SerializedName("is_valid_from")
     * @Type("DateTime<'Y-m-d'>")
     */
    protected $isValidFrom;

    /**
     * @var string
     * @SerializedName("contact_address")
     * @Type("string")
     */
    protected $contactAddress;

    /**
     * @var integer
     * @SerializedName("delivery_address_type")
     * @Type("integer")
     */
    protected $deliveryAddressType;

    /**
     * @var string
     * @SerializedName("delivery_address")
     * @Type("string")
     */
    protected $deliveryAddress;

    /**
     * @var integer
     * @SerializedName("kb_item_status_id")
     * @Type("integer")
     */
    protected $kbItemStatusId;

    /**
     * @var string|null
     * @SerializedName("api_reference")
     * @Type("string")
     */
    protected $apiReference;

    /**
     * @var string|null
     * @SerializedName("viewed_by_client_at")
     * @Type("string")
     */
    protected $viewedByClientAt;

    /**
     * @var DateTime
     * @SerializedName("updated_at")
     * @Type("DateTime<'Y-m-d H:i:s'>")
     */
    protected $updatedAt;

    /**
     * @var array
     * @SerializedName("taxs")
     * @Type("array")
     */
    protected $taxs;

    /**
     * @var array
     * @SerializedName("positions")
     * @Type("array<Aesislabs\BexioConnector\Container\Sales\ItemPosition>")
     */
    protected $positions;

    /**
     * @return array|ItemPosition[]
     */
    public function getPositions(): array
    {
        return $this->positions;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getDocumentNr(): string
    {
        return $this->documentNr;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function getContactId(): ?int
    {
        return $this->contactId;
    }

    public function getContactSubId(): ?int
    {
        return $this->contactSubId;
    }

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function getLogopaperId(): int
    {
        return $this->logopaperId;
    }

    public function getLanguageId(): int
    {
        return $this->languageId;
    }

    public function getBankAccountId(): int
    {
        return $this->bankAccountId;
    }

    public function getCurrencyId(): int
    {
        return $this->currencyId;
    }

    public function getHeader(): string
    {
        return $this->header;
    }

    public function getFooter(): string
    {
        return $this->footer;
    }

    public function getTotalGross(): string
    {
        return $this->totalGross;
    }

    public function getTotalNet(): string
    {
        return $this->totalNet;
    }

    public function getTotalTaxes(): string
    {
        return $this->totalTaxes;
    }

    public function getTotal(): string
    {
        return $this->total;
    }

    public function getTotalRoundingDifference(): float
    {
        return $this->totalRoundingDifference;
    }

    public function getMwstType(): int
    {
        return $this->mwstType;
    }

    public function isMwstIsNet(): bool
    {
        return $this->mwstIsNet;
    }

    public function getIsValidFrom(): DateTime
    {
        return $this->isValidFrom;
    }

    public function getContactAddress(): string
    {
        return $this->contactAddress;
    }

    public function getDeliveryAddressType(): int
    {
        return $this->deliveryAddressType;
    }

    public function getDeliveryAddress(): string
    {
        return $this->deliveryAddress;
    }

    public function getKbItemStatusId(): int
    {
        return $this->kbItemStatusId;
    }

    public function getApiReference(): ?string
    {
        return $this->apiReference;
    }

    public function getViewedByClientAt(): ?string
    {
        return $this->viewedByClientAt;
    }

    public function getUpdatedAt(): DateTime
    {
        return $this->updatedAt;
    }

    public function getTaxs(): array
    {
        return $this->taxs;
    }
}
