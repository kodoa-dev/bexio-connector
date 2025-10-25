<?php

namespace Aesislabs\BexioConnector\Request\Other\Notes;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2CreateNote
 */
class CreateNoteRequest extends Request
{
    const API_PATH = '/2.0/note';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'Aesislabs\BexioConnector\Container\Other\Note';
}
