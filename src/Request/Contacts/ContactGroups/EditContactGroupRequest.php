<?php

namespace Aesislabs\BexioConnector\Request\Contacts\ContactGroups;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2EditContactGroup
 */
class EditContactGroupRequest extends Request
{
    const API_PATH = '/2.0/contact_group/{contact_group_id}';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'Aesislabs\BexioConnector\Container\Contacts\ContactGroup';
}
