<?php

namespace Aesislabs\BexioConnector\Request\Contacts\Titles;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2EditTitle
 */
class EditTitleRequest extends Request
{
    const API_PATH = '/title/{title_id}';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'Aesislabs\BexioConnector\Container\Contacts\Title';
}
