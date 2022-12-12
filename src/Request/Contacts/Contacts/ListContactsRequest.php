<?php

namespace Aesislabs\BexioConnector\Request\Contacts\Contacts;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2ListContacts
 */
class ListContactsRequest extends Request
{
    const API_PATH = '/contact';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'array<Aesislabs\BexioConnector\Container\Contacts\Contact>';
}
