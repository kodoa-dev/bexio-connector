<?php

namespace Aesislabs\BexioConnector\RequestBody\Sales\ExtendedPositions;

use Aesislabs\BexioConnector\RequestBody\Sales\ItemPositions\ItemPositionBody;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class ExtendedItemPositionBody extends ItemPositionBody
{
    /**
     * @var string
     * @SerializedName("type")
     * @Type("string")
     */
    protected $type = 'KbPositionArticle';
}
