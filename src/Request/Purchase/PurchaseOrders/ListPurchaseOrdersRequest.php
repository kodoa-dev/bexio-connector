<?php

namespace Aesislabs\BexioConnector\Request\Purchase\PurchaseOrders;

use Aesislabs\BexioConnector\Message\Request;

class ListPurchaseOrdersRequest extends Request
{
    const API_PATH = '/3.0/purchase_orders';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'array<Aesislabs\BexioConnector\Container\Purchase\PurchaseOrder>';
}
