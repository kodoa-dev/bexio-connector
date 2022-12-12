<?php

namespace Aesislabs\BexioConnector\RequestBody;

abstract class AbstractBody implements RequestBodyInterface
{
    /**
     * @return $this
     */
    public function getBody(): self
    {
        return $this;
    }
}
