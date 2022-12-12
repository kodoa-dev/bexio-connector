<?php

namespace Aesislabs\BexioConnector\RequestBody;

interface RequestBodyInterface
{
    /**
     * @return self|SearchBodyItemInterface[]|RequestBodyInterface[]
     */
    public function getBody();
}
