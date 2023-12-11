<?php

namespace Aesislabs\BexioConnector\Container\Sales;

use Aesislabs\BexioConnector\Container\ContainerInterface;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class PositionNewDefinition implements ContainerInterface
{
    /**
     * @SerializedName("total")
     * @Type("integer")
     */
    protected int $total;

    /**
     * @SerializedName("total")
     * @Type("integer")
     */
    protected int $totalNet;

    /**
     * @SerializedName("total")
     * @Type("integer")
     */
    protected int $totalGross;

    /**
     * @SerializedName("total")
     * @Type("integer")
     */
    protected int $totalDiscount;

    /**
     * @SerializedName("total")
     * @Type("integer")
     */
    protected int $totalTax;

    /**
     * @SerializedName("required")
     * @Type("array<Aesislabs\BexioConnector\Container\Sales\ItemPosition>")
     */
    protected array $required;

    /**
     * @SerializedName("optional")
     * @Type("array<Aesislabs\BexioConnector\Container\Sales\ItemPosition>")
     */
    protected array $optional;

    /**
     * @SerializedName("discount")
     * @Type("array<Aesislabs\BexioConnector\Container\Sales\ItemPosition>")
     */
    protected array $discount;

    public function getTotal(): int
    {
        return $this->total;
    }

    public function getTotalNet(): int
    {
        return $this->totalNet;
    }

    public function getTotalGross(): int
    {
        return $this->totalGross;
    }

    public function getTotalDiscount(): int
    {
        return $this->totalDiscount;
    }

    public function getTotalTax(): int
    {
        return $this->totalTax;
    }

    public function getRequired(): array
    {
        return $this->required;
    }

    public function getOptional(): array
    {
        return $this->optional;
    }

    public function getDiscount(): array
    {
        return $this->discount;
    }
}
