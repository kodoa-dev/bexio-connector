<?php

namespace Aesislabs\BexioConnector\Request\Sales\Invoices;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2SearchInvoiceReminders
 */
class SearchInvoiceRemindersRequest extends Request
{
    const API_PATH = '/2.0/kb_invoice/{invoice_id}/kb_reminder/search';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'array<Aesislabs\BexioConnector\Container\Sales\InvoiceReminder>';
}
