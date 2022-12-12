<?php

namespace Aesislabs\BexioConnector\Request\Accounting\Currencies;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/UpdateCurrency
 */
class UpdateCurrencyRequest extends Request
{
    const API_PATH = '/currencies/{currency_id}';
    const API_METHOD = 'PATCH';
    const API_VERSION_URL = '/3.0';

    const RESPONSE_CONTAINER = 'Aesislabs\BexioConnector\Container\Accounting\Currency';
}
