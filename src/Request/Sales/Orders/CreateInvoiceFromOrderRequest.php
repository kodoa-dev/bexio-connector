<?php

namespace Aesislabs\BexioConnector\Request\Sales\Orders;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2CreateInvoiceFromOrder
 */
class CreateInvoiceFromOrderRequest extends Request
{
    const API_PATH = '/kb_order/{order_id}/invoice';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'Aesislabs\BexioConnector\Container\Sales\Invoice';
}
