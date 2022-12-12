<?php

namespace Aesislabs\BexioConnector\Request\Contacts\Contacts;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2ShowContact
 */
class ShowContactRequest extends Request
{
    const API_PATH = '/contact/{contact_id}';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'Aesislabs\BexioConnector\Container\Contacts\Contact';
}
