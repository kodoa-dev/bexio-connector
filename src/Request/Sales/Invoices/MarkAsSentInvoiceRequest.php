<?php

namespace Aesislabs\BexioConnector\Request\Sales\Invoices;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2RMarkAsSentInvoice
 */
class MarkAsSentInvoiceRequest extends Request
{
    const API_PATH = '/kb_invoice/{invoice_id}/mark_as_sent';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'Aesislabs\BexioConnector\Container\Success';
}
