<?php

namespace Aesislabs\BexioConnector\RequestBody\Contacts\Titles;

use Aesislabs\BexioConnector\RequestBody\AbstractBody;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class TitleBody extends AbstractBody
{
    /**
     * @var string
     * @SerializedName("name")
     * @Type("string")
     */
    protected $name;

    /**
     * @param string $name
     * @return $this
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }
}
