<?php

namespace Aesislabs\BexioConnector\RequestBody\Sales\SubtotalPositions;

use Aesislabs\BexioConnector\RequestBody\AbstractBody;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class SubtotalPositionBody extends AbstractBody
{
    /**
     * @var string
     * @SerializedName("text")
     * @Type("string")
     */
    protected $text;

    /**
     * @param string $text
     * @return SubtotalPositionBody
     */
    public function setText(string $text): SubtotalPositionBody
    {
        $this->text = $text;
        return $this;
    }
}
