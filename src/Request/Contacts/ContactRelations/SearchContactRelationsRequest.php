<?php

namespace Aesislabs\BexioConnector\Request\Contacts\ContactRelations;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2SearchContactRelations
 */
class SearchContactRelationsRequest extends Request
{
    const API_PATH = '/contact_relation/search';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'array<Aesislabs\BexioConnector\Container\Contacts\ContactRelation>';
}
