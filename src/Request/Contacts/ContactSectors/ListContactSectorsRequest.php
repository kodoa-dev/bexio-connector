<?php

namespace Aesislabs\BexioConnector\Request\Contacts\ContactSectors;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2ListContactSectors
 */
class ListContactSectorsRequest extends Request
{
    const API_PATH = '/2.0/contact_branch';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'array<Aesislabs\BexioConnector\Container\Contacts\ContactSector>';
}
