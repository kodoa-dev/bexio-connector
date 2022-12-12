<?php

namespace Aesislabs\BexioConnector\Request\Sales\Invoices;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/DeleteInvoice
 */
class DeleteInvoiceRequest extends Request
{
    const API_PATH = '/kb_invoice/{invoice_id}';
    const API_METHOD = 'DELETE';

    const RESPONSE_CONTAINER = 'Aesislabs\BexioConnector\Container\Success';
}
