<?php

namespace Aesislabs\BexioConnector\Container\Purchase;

use Aesislabs\BexioConnector\Container\ContainerInterface;
use Ramsey\Uuid\UuidInterface;

class Bill implements ContainerInterface
{
    protected UuidInterface $id;
    protected \DateTimeImmutable $createdAt;
    protected string $documentNo;
    protected string $status;
    protected string $vendorRef;
    protected string $firstnameSuffix;
    protected string $lastnameCompany;
    protected string $vendor;
    protected string $title;
    protected string $currencyCode;
    protected float $pendingAmount;
    protected float $net;
    protected float $gross;
    protected \DateTimeImmutable $billDate;
    protected \DateTimeImmutable $dueDate;
    protected bool $overdue;
    protected array $bookingAccountIds;
    protected array $attachmentIds;

    public function getId(): UuidInterface
    {
        return $this->id;
    }

    public function getCreatedAt(): \DateTimeImmutable
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

    public function getVendorRef(): string
    {
        return $this->vendorRef;
    }

    public function getFirstnameSuffix(): string
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

    public function getTitle(): string
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

    public function getBillDate(): \DateTimeImmutable
    {
        return $this->billDate;
    }

    public function getDueDate(): \DateTimeImmutable
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
