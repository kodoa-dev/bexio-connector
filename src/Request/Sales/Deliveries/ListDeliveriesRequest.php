<?php

namespace Aesislabs\BexioConnector\Request\Sales\Deliveries;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2ListDeliveries
 */
class ListDeliveriesRequest extends Request
{
    const API_PATH = '/2.0/kb_delivery';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'array<Aesislabs\BexioConnector\Container\Sales\Delivery>';
}
