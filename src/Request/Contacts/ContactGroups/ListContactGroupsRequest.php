<?php

namespace Aesislabs\BexioConnector\Request\Contacts\ContactGroups;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2ListContacts
 */
class ListContactGroupsRequest extends Request
{
    const API_PATH = '/2.0/contact_group';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'array<Aesislabs\BexioConnector\Container\Contacts\ContactGroup>';
}
