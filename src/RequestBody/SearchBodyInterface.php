<?php

namespace Aesislabs\BexioConnector\RequestBody;

interface SearchBodyInterface
{
    public function createItem(): SearchBodyItemInterface;
}
