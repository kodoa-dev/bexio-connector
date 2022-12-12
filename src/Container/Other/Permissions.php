<?php

namespace Aesislabs\BexioConnector\Container\Other;

use Aesislabs\BexioConnector\Container\ContainerInterface;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class Permissions implements ContainerInterface
{
    /**
     * @var array
     * @SerializedName("components")
     * @Type("array")
     */
    protected $components;

    /**
     * @var array
     * @SerializedName("permissions")
     * @Type("array")
     */
    protected $permissions;
}
