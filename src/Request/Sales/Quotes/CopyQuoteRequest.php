<?php

namespace Aesislabs\BexioConnector\Request\Sales\Quotes;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2CopyQuote
 */
class CopyQuoteRequest extends Request
{
    const API_PATH = '/2.0/kb_offer/{quote_id}/copy';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'Aesislabs\BexioConnector\Container\Sales\Quote';
}
