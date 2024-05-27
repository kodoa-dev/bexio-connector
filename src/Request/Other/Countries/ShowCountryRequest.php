<?php

namespace Aesislabs\BexioConnector\Request\Other\Countries;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2ShowTitle
 */
class ShowCountryRequest extends Request
{
    const API_PATH = '/2.0/country/{country_id}';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'Aesislabs\BexioConnector\Container\Other\Country';
}
