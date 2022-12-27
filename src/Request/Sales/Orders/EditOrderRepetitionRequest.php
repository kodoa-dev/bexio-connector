<?php

namespace Aesislabs\BexioConnector\Request\Sales\Orders;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2EditOrderRepetition
 */
class EditOrderRepetitionRequest extends Request
{
    const API_PATH = '/2.0/kb_order/{order_id}/repetition';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'Aesislabs\BexioConnector\Container\Sales\OrderRepetition';
}
