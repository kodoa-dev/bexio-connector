<?php

namespace Aesislabs\BexioConnector\Request\Contacts\ContactRelations;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2ListContactRelations
 */
class ListContactRelationsRequest extends Request
{
    const API_PATH = '/2.0/contact_relation';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'array<Aesislabs\BexioConnector\Container\Contacts\ContactRelation>';
}
