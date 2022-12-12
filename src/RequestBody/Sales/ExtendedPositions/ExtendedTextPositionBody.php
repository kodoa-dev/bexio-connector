<?php

namespace Aesislabs\BexioConnector\RequestBody\Sales\ExtendedPositions;

use Aesislabs\BexioConnector\RequestBody\Sales\TextPositions\TextPositionBody;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class ExtendedTextPositionBody extends TextPositionBody
{
    /**
     * @var string
     * @SerializedName("type")
     * @Type("string")
     */
    protected $type = 'KbPositionText';
}
