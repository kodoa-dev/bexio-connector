<?php

namespace Aesislabs\BexioConnector\Container\Sales;

use Aesislabs\BexioConnector\Container\ContainerInterface;
use JMS\Serializer\Annotation as Serializer;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class DiscountPosition implements ContainerInterface
{
    /**
     * @var int
     * @SerializedName("id")
     * @Type("integer")
     */
    protected $id;

    /**
     * @var string
     * @SerializedName("text")
     * @Serializer\Groups({"write"})
     * @Type("string")
     */
    protected $text;

    /**
     * @var boolean
     * @SerializedName("is_percentual")
     * @Serializer\Groups({"write"})
     * @Type("boolean")
     */
    protected $isPercentual;

    /**
     * @var string
     * @SerializedName("value")
     * @Serializer\Groups({"write"})
     * @Type("string")
     */
    protected $value;

    /**
     * @var string
     * @SerializedName("discount_total")
     * @Type("string")
     */
    protected $discountTotal;

    /**
     * @var string
     * @SerializedName("type")
     * @Serializer\Groups({"write"})
     * @Type("string")
     */
    protected $type;

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
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @return bool
     */
    public function isPercentual(): bool
    {
        return $this->isPercentual;
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @return string
     */
    public function getDiscountTotal(): string
    {
        return $this->discountTotal;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function setText(string $text): void
    {
        $this->text = $text;
    }

    public function setIsPercentual(bool $isPercentual): void
    {
        $this->isPercentual = $isPercentual;
    }

    public function setValue(string $value): void
    {
        $this->value = $value;
    }

    public function setDiscountTotal(string $discountTotal): void
    {
        $this->discountTotal = $discountTotal;
    }

    public function setType(string $type): void
    {
        $this->type = $type;
    }
}
