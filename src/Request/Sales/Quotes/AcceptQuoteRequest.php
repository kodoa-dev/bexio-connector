<?php

namespace Aesislabs\BexioConnector\Request\Sales\Quotes;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2AcceptQuote
 */
class AcceptQuoteRequest extends Request
{
    const API_PATH = '/kb_offer/{quote_id}/accept';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'Aesislabs\BexioConnector\Container\Success';
}
