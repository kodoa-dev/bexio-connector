<?php

namespace Aesislabs\BexioConnector\Request\Accounting\ManualEntries;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/GetNextReferenceNumber
 */
class ShowNextReferenceNumberRequest extends Request
{
    const API_PATH = '/2.0/accounting/manual_entries/next_ref_nr';
    const API_METHOD = 'GET';
    const API_VERSION_URL = '/3.0';

    const RESPONSE_CONTAINER = 'Aesislabs\BexioConnector\Container\Accounting\NextReferenceNumber';
}
