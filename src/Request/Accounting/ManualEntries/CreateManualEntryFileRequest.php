<?php

namespace Aesislabs\BexioConnector\Request\Accounting\ManualEntries;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/UploadManualEntryFile
 */
class CreateManualEntryFileRequest extends Request
{
    const API_PATH = '/2.0/accounting/manual_entries/{manual_entry_id}/entries/{entry_id}/files';
    const API_METHOD = 'POST';
    const API_VERSION_URL = '/3.0';

    const RESPONSE_CONTAINER = 'Aesislabs\BexioConnector\Container\Accounting\ManualEntryFile';
}
