<?php

namespace Aesislabs\BexioConnector\Request\Contacts\AdditionalAddresses;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2ListAdditionalAddresses
 */
class ListAdditionalAddressesRequest extends Request
{
    const API_PATH = '/2.0/contact/{contact_id}/additional_address';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'array<Aesislabs\BexioConnector\Container\Contacts\AdditionalAddress>';
}
