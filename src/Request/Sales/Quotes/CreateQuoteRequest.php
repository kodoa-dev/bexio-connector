<?php

namespace Aesislabs\BexioConnector\Request\Sales\Quotes;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2CreateQuote
 */
class CreateQuoteRequest extends Request
{
    const API_PATH = '/kb_offer';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'Aesislabs\BexioConnector\Container\Sales\Quote';
}
