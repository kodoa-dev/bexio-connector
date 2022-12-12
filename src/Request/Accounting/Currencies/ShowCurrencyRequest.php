<?php

namespace Aesislabs\BexioConnector\Request\Accounting\Currencies;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/ShowCurrency
 */
class ShowCurrencyRequest extends Request
{
    const API_PATH = '/currencies/{currency_id}';
    const API_METHOD = 'GET';
    const API_VERSION_URL = '/3.0';

    const RESPONSE_CONTAINER = 'Aesislabs\BexioConnector\Container\Accounting\Currency';
}
