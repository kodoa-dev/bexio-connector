<?php

namespace Aesislabs\BexioConnector\Request\Contacts\Titles;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2DeleteTitle
 */
class DeleteTitleRequest extends Request
{
    const API_PATH = '/2.0/title/{title_id}';
    const API_METHOD = 'DELETE';

    const RESPONSE_CONTAINER = 'Aesislabs\BexioConnector\Container\Success';
}
