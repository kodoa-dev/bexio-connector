<?php

namespace Aesislabs\BexioConnector\Request\Contacts\ContactGroups;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2ShowContactGroup
 */
class ShowContactGroupRequest extends Request
{
    const API_PATH = '/contact_group/{contact_group_id}';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'Aesislabs\BexioConnector\Container\Contacts\ContactGroup';
}
