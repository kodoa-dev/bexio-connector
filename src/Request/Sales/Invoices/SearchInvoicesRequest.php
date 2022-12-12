<?php

namespace Aesislabs\BexioConnector\Request\Sales\Invoices;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2SearchInvoices
 */
class SearchInvoicesRequest extends Request
{
    const API_PATH = '/kb_invoice/search';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'array<Aesislabs\BexioConnector\Container\Sales\Invoice>';
}
