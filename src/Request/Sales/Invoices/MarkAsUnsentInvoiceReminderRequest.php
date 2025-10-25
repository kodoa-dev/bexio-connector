<?php

namespace Aesislabs\BexioConnector\Request\Sales\Invoices;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2RMarkAsSentInvoiceReminder
 */
class MarkAsUnsentInvoiceReminderRequest extends Request
{
    const API_PATH = '/2.0/kb_invoice/{invoice_id}/kb_reminder/{reminder_id}/mark_as_unsent';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'Aesislabs\BexioConnector\Container\Success';
}
