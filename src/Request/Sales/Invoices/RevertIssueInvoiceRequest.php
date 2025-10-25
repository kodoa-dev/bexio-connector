<?php

namespace Aesislabs\BexioConnector\Request\Sales\Invoices;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2RevertIssueInvoice
 */
class RevertIssueInvoiceRequest extends Request
{
    const API_PATH = '/2.0/kb_invoice/{invoice_id}/revert_issue';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'Aesislabs\BexioConnector\Container\Success';
}
