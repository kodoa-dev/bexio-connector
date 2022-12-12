<?php

namespace Aesislabs\BexioConnector\Request\Accounting\Reports;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/ListJournalEntries
 */
class ListJournalEntriesRequest extends Request
{
    const API_PATH = '/accounting/journal';
    const API_METHOD = 'GET';
    const API_VERSION_URL = '/3.0';

    const RESPONSE_CONTAINER = 'array<Aesislabs\BexioConnector\Container\Accounting\JournalEntry>';
}
