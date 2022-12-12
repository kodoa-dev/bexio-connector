<?php

namespace Aesislabs\BexioConnector\Request\Contacts\Contacts;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2BulkCreateContacts
 */
class CreateContactsBulkRequest extends Request
{
    const API_PATH = '/contact/_bulk_create';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'array<Aesislabs\BexioConnector\Container\Contacts\Contact>';
}
