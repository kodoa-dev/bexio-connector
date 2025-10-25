<?php

namespace Aesislabs\BexioConnector\Request\Contacts\Titles;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2CreateTitle
 */
class CreateTitleRequest extends Request
{
    const API_PATH = '/2.0/title';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'Aesislabs\BexioConnector\Container\Contacts\Title';
}
