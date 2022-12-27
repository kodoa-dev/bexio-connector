<?php

namespace Aesislabs\BexioConnector\Request\Sales\Quotes;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2CreateOrderFromQuote
 */
class CreateOrderFromQuoteRequest extends Request
{
    const API_PATH = '/2.0/kb_offer/{quote_id}/order';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'Aesislabs\BexioConnector\Container\Sales\Order';
}
