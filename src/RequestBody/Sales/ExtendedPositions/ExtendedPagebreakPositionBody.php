<?php

namespace Aesislabs\BexioConnector\RequestBody\Sales\ExtendedPositions;

use Aesislabs\BexioConnector\RequestBody\Sales\PagebreakPositions\PagebreakPositionBody;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class ExtendedPagebreakPositionBody extends PagebreakPositionBody
{
    /**
     * @var string
     * @SerializedName("type")
     * @Type("string")
     */
    protected $type = 'KbPositionPagebreak';
}
