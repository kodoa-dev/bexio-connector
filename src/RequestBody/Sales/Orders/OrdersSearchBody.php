<?php

namespace Aesislabs\BexioConnector\RequestBody\Sales\Orders;

use Aesislabs\BexioConnector\RequestBody\AbstractSearchBody;

class OrdersSearchBody extends AbstractSearchBody
{
    protected const ITEM_CLASS = OrdersSearchBodyItem::class;
}
