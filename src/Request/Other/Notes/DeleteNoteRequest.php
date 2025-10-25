<?php

namespace Aesislabs\BexioConnector\Request\Other\Notes;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/DeleteNote
 */
class DeleteNoteRequest extends Request
{
    const API_PATH = '/2.0/note/{country_id}';
    const API_METHOD = 'DELETE';

    const RESPONSE_CONTAINER = 'Aesislabs\BexioConnector\Container\Success';
}
