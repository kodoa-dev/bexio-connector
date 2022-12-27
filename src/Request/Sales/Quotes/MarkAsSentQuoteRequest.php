<?php

namespace Aesislabs\BexioConnector\Request\Sales\Quotes;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2RMarkAsSentQuote
 */
class MarkAsSentQuoteRequest extends Request
{
    const API_PATH = '/2.0/kb_offer/{quote_id}/mark_as_sent';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'Aesislabs\BexioConnector\Container\Success';
}
