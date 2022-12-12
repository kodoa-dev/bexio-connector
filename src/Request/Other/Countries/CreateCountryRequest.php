<?php

namespace Aesislabs\BexioConnector\Request\Other\Countries;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2CreateCountry
 */
class CreateCountryRequest extends Request
{
    const API_PATH = '/country';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'Aesislabs\BexioConnector\Container\Other\Country';
}
