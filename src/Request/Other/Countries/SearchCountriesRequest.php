<?php

namespace Aesislabs\BexioConnector\Request\Other\Countries;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2SearchCountries
 */
class SearchCountriesRequest extends Request
{
    const API_PATH = '/country/search';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'array<Aesislabs\BexioConnector\Container\Other\Country>';
}
