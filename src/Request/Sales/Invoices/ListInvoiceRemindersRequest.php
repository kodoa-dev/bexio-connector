<?php

namespace Aesislabs\BexioConnector\Request\Sales\Invoices;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2ListInvoiceReminders
 */
class ListInvoiceRemindersRequest extends Request
{
    const API_PATH = '/2.0/kb_invoice/{invoice_id}/kb_reminder';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'array<Aesislabs\BexioConnector\Container\Sales\InvoiceReminder>';
}
