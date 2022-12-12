<?php

namespace Aesislabs\BexioConnector\Request\Accounting\BusinessYears;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/ShowBusinessYear
 */
class ShowBusinessYearRequest extends Request
{
    const API_PATH = '/accounting/business_years/{business_year_id}';
    const API_METHOD = 'GET';
    const API_VERSION_URL = '/3.0';

    const RESPONSE_CONTAINER = 'Aesislabs\BexioConnector\Container\Accounting\BusinessYear';
}
