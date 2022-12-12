<?php

namespace Aesislabs\BexioConnector\Request\Contacts\Salutations;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2ListSalutations
 */
class ListSalutationsRequest extends Request
{
    const API_PATH = '/salutation';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'array<Aesislabs\BexioConnector\Container\Contacts\Salutation>';
}
