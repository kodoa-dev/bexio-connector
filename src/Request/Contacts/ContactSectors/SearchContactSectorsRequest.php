<?php

namespace Aesislabs\BexioConnector\Request\Contacts\ContactSectors;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2SearchContactSectors
 */
class SearchContactSectorsRequest extends Request
{
    const API_PATH = '/contact_branch/search';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'array<Aesislabs\BexioConnector\Container\Contacts\ContactSector>';
}
