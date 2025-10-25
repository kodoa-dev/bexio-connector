<?php

namespace Aesislabs\BexioConnector\Request\Other\Countries;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/DeleteCountry
 */
class DeleteCountryRequest extends Request
{
    const API_PATH = '/2.0/country/{country_id}';
    const API_METHOD = 'DELETE';

    const RESPONSE_CONTAINER = 'Aesislabs\BexioConnector\Container\Success';
}
