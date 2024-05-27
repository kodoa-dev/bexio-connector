<?php

namespace Aesislabs\BexioConnector\Request\Accounting\ManualEntries;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/DeleteManualEntryFile
 */
class DeleteManualEntryFileRequest extends Request
{
    const API_PATH = '/2.0/accounting/manual_entries/{manual_entry_id}/entries/{entry_id}/files/{file_id}';
    const API_METHOD = 'DELETE';
    const API_VERSION_URL = '/3.0';

    const RESPONSE_CONTAINER = 'Aesislabs\BexioConnector\Container\Success';
}
