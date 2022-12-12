<?php

namespace Aesislabs\BexioConnector\RequestBody\Sales\Orders;

use Aesislabs\BexioConnector\RequestBody\AbstractArrayBody;

class PositionsArrayBody extends AbstractArrayBody
{
    protected const ITEM_CLASS = PositionsArrayBodyItem::class;

    public function createItem(): PositionsArrayBodyItem
    {
        return parent::createItem();
    }
}
