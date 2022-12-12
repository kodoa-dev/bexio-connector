<?php

namespace Aesislabs\BexioConnector\Request\Accounting\BusinessYears;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/ListBusinessYears
 */
class ListBusinessYearsRequest extends Request
{
    const API_PATH = '/accounting/business_years';
    const API_METHOD = 'GET';
    const API_VERSION_URL = '/3.0';

    const RESPONSE_CONTAINER = 'array<Aesislabs\BexioConnector\Container\Accounting\BusinessYear>';
}
