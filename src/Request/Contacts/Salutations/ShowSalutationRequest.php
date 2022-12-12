<?php

namespace Aesislabs\BexioConnector\Request\Contacts\Salutations;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2ShowSalutation
 */
class ShowSalutationRequest extends Request
{
    const API_PATH = '/salutation/{salutation_id}';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'Aesislabs\BexioConnector\Container\Contacts\Salutation';
}
