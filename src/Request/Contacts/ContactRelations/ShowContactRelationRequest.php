<?php

namespace Aesislabs\BexioConnector\Request\Contacts\ContactRelations;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2ShowContactRelation
 */
class ShowContactRelationRequest extends Request
{
    const API_PATH = '/contact_relation/{contact_relation_id}';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'Aesislabs\BexioConnector\Container\Contacts\ContactRelation';
}
