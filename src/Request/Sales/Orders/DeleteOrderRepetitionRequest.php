<?php

namespace Aesislabs\BexioConnector\Request\Sales\Orders;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/DeleteOrderRepetition
 */
class DeleteOrderRepetitionRequest extends Request
{
    const API_PATH = '/kb_order/{order_id}/repetition';
    const API_METHOD = 'DELETE';

    const RESPONSE_CONTAINER = 'Aesislabs\BexioConnector\Container\Success';
}
