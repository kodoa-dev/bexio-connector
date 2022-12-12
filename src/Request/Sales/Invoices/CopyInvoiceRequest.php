<?php

namespace Aesislabs\BexioConnector\Request\Sales\Invoices;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2CopyInvoice
 */
class CopyInvoiceRequest extends Request
{
    const API_PATH = '/kb_invoice/{invoice_id}/copy';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'Aesislabs\BexioConnector\Container\Sales\Invoice';
}
