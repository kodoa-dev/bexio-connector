<?php

namespace Aesislabs\BexioConnector\Request\Contacts\AdditionalAddresses;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2CreateAdditionalAddress
 */
class CreateAdditionalAddressRequest extends Request
{
    const API_PATH = '/2.0/contact/{contact_id}/additional_address';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'Aesislabs\BexioConnector\Container\Contacts\AdditionalAddress';
}
