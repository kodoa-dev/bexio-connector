<?php

namespace Aesislabs\BexioConnector\Request\Sales\Invoices;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2ListInvoices
 */
class ListInvoicesRequest extends Request
{
    const API_PATH = '/kb_invoice';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'array<Aesislabs\BexioConnector\Container\Sales\Invoice>';
}
