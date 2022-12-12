<?php

namespace Aesislabs\BexioConnector\Request\Sales\Invoices;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2ShowInvoiceReminderPDF
 */
class ShowInvoiceReminderPDFRequest extends Request
{
    const API_PATH = '/kb_invoice/{invoice_id}/kb_reminder/{reminder_id}/pdf';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'Aesislabs\BexioConnector\Container\Sales\File';
}
