<?php

namespace Aesislabs\BexioConnector\Request\Sales\Invoices;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2ListInvoicePayments
 */
class ListInvoicePaymentsRequest extends Request
{
    const API_PATH = '/2.0/kb_invoice/{invoice_id}/payment';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'array<Aesislabs\BexioConnector\Container\Sales\InvoicePayment>';
}
