<?php

namespace Aesislabs\BexioConnector\Request\Contacts\Titles;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2ListTitles
 */
class ListTitlesRequest extends Request
{
    const API_PATH = '/title';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'array<Aesislabs\BexioConnector\Container\Contacts\Title>';
}
