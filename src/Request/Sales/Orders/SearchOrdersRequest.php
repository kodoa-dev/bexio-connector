<?php

namespace Aesislabs\BexioConnector\Request\Sales\Orders;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2SearchOrders
 */
class SearchOrdersRequest extends Request
{
    const API_PATH = '/kb_order/search';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'array<Aesislabs\BexioConnector\Container\Sales\Order>';
}
