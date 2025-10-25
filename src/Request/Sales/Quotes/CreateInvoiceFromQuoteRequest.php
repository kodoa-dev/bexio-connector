<?php

namespace Aesislabs\BexioConnector\Request\Sales\Quotes;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2CreateInvoiceFromQuote
 */
class CreateInvoiceFromQuoteRequest extends Request
{
    const API_PATH = '/2.0/kb_offer/{quote_id}/invoice';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'Aesislabs\BexioConnector\Container\Sales\Invoice';
}
