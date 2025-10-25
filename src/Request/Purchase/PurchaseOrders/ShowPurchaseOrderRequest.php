<?php

namespace Aesislabs\BexioConnector\Request\Purchase\PurchaseOrders;

use Aesislabs\BexioConnector\Message\Request;

class ShowPurchaseOrderRequest extends Request
{
    const API_PATH = '/3.0/purchase_orders/{id}';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'Aesislabs\BexioConnector\Container\Purchase\PurchaseOrder';
}
