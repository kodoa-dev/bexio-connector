<?php

namespace Aesislabs\BexioConnector\Request\Contacts\Contacts;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2CreateContact
 */
class CreateContactRequest extends Request
{
    const API_PATH = '/contact';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'Aesislabs\BexioConnector\Container\Contacts\Contact';
}
