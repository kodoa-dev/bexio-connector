<?php

namespace Aesislabs\BexioConnector\Request\Contacts\ContactRelations;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2CreateContactRelation
 */
class CreateContactRelationRequest extends Request
{
    const API_PATH = '/contact_relation';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'Aesislabs\BexioConnector\Container\Contacts\ContactRelation';
}
