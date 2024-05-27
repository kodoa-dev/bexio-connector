<?php

namespace Aesislabs\BexioConnector\Request\Contacts\AdditionalAddresses;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2SearchAdditionalAddresses
 */
class SearchAdditionalAddressesRequest extends Request
{
    const API_PATH = '/2.0/contact/{contact_id}/additional_address/search';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'array<Aesislabs\BexioConnector\Container\Contacts\AdditionalAddress>';
}
