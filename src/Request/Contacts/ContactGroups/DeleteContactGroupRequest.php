<?php

namespace Aesislabs\BexioConnector\Request\Contacts\ContactGroups;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2DeleteContactGroup
 */
class DeleteContactGroupRequest extends Request
{
    const API_PATH = '/contact_group/{contact_group_id}';
    const API_METHOD = 'DELETE';

    const RESPONSE_CONTAINER = 'Aesislabs\BexioConnector\Container\Success';
}
