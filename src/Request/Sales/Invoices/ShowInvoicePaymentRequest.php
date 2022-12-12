<?php

namespace Aesislabs\BexioConnector\Request\Sales\Invoices;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2ShowInvoicePayment
 */
class ShowInvoicePaymentRequest extends Request
{
    const API_PATH = '/kb_invoice/{invoice_id}/payment/{payment_id}';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'Aesislabs\BexioConnector\Container\Sales\InvoicePayment';
}
