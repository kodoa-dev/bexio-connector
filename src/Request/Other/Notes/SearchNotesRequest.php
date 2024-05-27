<?php

namespace Aesislabs\BexioConnector\Request\Other\Notes;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2SearchNotes
 */
class SearchNotesRequest extends Request
{
    const API_PATH = '/2.0/note/search';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'array<Aesislabs\BexioConnector\Container\Other\Note>';
}
