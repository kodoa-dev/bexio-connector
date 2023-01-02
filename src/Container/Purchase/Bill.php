<?php

namespace Aesislabs\BexioConnector\Container\Purchase;

use Aesislabs\BexioConnector\Container\ContainerInterface;
use JMS\Serializer\Annotation as Serializer;
use Ramsey\Uuid\UuidInterface;

class Bill implements ContainerInterface
{
    /**
     * @Serializer\Type("string")
     */
    protected string $id;

    /**
     * @Serializer\Type("DateTime")
     */
    protected \DateTime $createdAt;

    /**
     * @Serializer\Type("string")
     */
    protected string $documentNo;

    /**
     * @Serializer\Type("string")
     */
    protected string $status;

    /**
     * @Serializer\Type("string")
     */
    protected ?string $vendorRef;

    /**
     * @Serializer\Type("string")
     */
    protected ?string $firstnameSuffix;

    /**
     * @Serializer\Type("string")
     */
    protected string $lastnameCompany;

    /**
     * @Serializer\Type("string")
     */
    protected string $vendor;

    /**
     * @Serializer\Type("string")
     */
    protected ?string $title;

    /**
     * @Serializer\Type("string")
     */
    protected string $currencyCode;

    /**
     * @Serializer\Type("float")
     */
    protected float $pendingAmount;

    /**
     * @Serializer\Type("float")
     */
    protected float $net;

    /**
     * @Serializer\Type("float")
     */
    protected float $gross;

    /**
     * @Serializer\Type("DateTime<'Y-m-d'>")
     */
    protected \DateTime $billDate;

    /**
     * @Serializer\Type("DateTime<'Y-m-d'>")
     */
    protected \DateTime $dueDate;

    /**
     * @Serializer\Type("bool")
     */
    protected bool $overdue;

    /**
     * @Serializer\Type("array")
     */
    protected array $bookingAccountIds;

    /**
     * @Serializer\Type("array")
     */
    protected array $attachmentIds;

    public function getId(): string
    {
        return $this->id;
    }

    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }

    public function getDocumentNo(): string
    {
        return $this->documentNo;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function getVendorRef(): ?string
    {
        return $this->vendorRef;
    }

    public function getFirstnameSuffix(): ?string
    {
        return $this->firstnameSuffix;
    }

    public function getLastnameCompany(): string
    {
        return $this->lastnameCompany;
    }

    public function getVendor(): string
    {
        return $this->vendor;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function getCurrencyCode(): string
    {
        return $this->currencyCode;
    }

    public function getPendingAmount(): float
    {
        return $this->pendingAmount;
    }

    public function getNet(): float
    {
        return $this->net;
    }

    public function getGross(): float
    {
        return $this->gross;
    }

    public function getBillDate(): \DateTime
    {
        return $this->billDate;
    }

    public function getDueDate(): \DateTime
    {
        return $this->dueDate;
    }

    public function isOverdue(): bool
    {
        return $this->overdue;
    }

    public function getBookingAccountIds(): array
    {
        return $this->bookingAccountIds;
    }

    public function getAttachmentIds(): array
    {
        return $this->attachmentIds;
    }
}
