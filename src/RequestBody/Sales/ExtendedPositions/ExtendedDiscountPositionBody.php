<?php

namespace Aesislabs\BexioConnector\RequestBody\Sales\ExtendedPositions;

use Aesislabs\BexioConnector\RequestBody\Sales\DiscountPositions\DiscountPositionBody;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class ExtendedDiscountPositionBody extends DiscountPositionBody
{
    /**
     * @var string
     * @SerializedName("type")
     * @Type("string")
     */
    protected $type = 'KbPositionDiscount';
}
