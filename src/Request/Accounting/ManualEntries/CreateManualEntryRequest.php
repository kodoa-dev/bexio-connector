<?php

namespace Aesislabs\BexioConnector\Request\Accounting\ManualEntries;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/CreateManualEntry
 */
class CreateManualEntryRequest extends Request
{
    const API_PATH = '/accounting/manual_entries';
    const API_METHOD = 'POST';
    const API_VERSION_URL = '/3.0';

    const RESPONSE_CONTAINER = 'Aesislabs\BexioConnector\Container\Accounting\ManualEntry';
}
