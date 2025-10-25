<?php

namespace Aesislabs\BexioConnector\Request\Accounting\Taxes;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/ListTaxes
 */
class ListTaxesRequest extends Request
{
    const API_PATH = '/3.0/taxes';
    const API_METHOD = 'GET';
    const API_VERSION_URL = '/3.0';

    const RESPONSE_CONTAINER = 'array<Aesislabs\BexioConnector\Container\Accounting\Tax>';
}
