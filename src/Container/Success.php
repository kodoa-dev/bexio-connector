<?php

namespace Aesislabs\BexioConnector\Container;

use Aesislabs\BexioConnector\Container\ContainerInterface;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class Success implements ContainerInterface
{
    /**
     * @var bool
     * @SerializedName("success")
     * @Type("bool")
     */
    protected $success;

    /**
     * @return bool
     */
    public function isSuccess(): bool
    {
        return $this->success;
    }
}
