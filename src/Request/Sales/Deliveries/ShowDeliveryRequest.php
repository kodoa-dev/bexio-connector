<?php

namespace Aesislabs\BexioConnector\Request\Sales\Deliveries;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2ShowDelivery
 */
class ShowDeliveryRequest extends Request
{
    const API_PATH = '/2.0/kb_delivery/{delivery_id}';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'Aesislabs\BexioConnector\Container\Sales\Delivery';
}
