<?php

namespace Aesislabs\BexioConnector\Request\Other\Countries;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2ListCountries
 */
class ListCountriesRequest extends Request
{
    const API_PATH = '/2.0/country';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'array<Aesislabs\BexioConnector\Container\Other\Country>';
}
