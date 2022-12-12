<?php

namespace Aesislabs\BexioConnector\Request\Accounting\Taxes;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/ShowTax
 */
class ShowTaxRequest extends Request
{
    const API_PATH = '/taxes/{tax_id}';
    const API_METHOD = 'GET';
    const API_VERSION_URL = '/3.0';

    const RESPONSE_CONTAINER = 'Aesislabs\BexioConnector\Container\Accounting\Tax';
}
