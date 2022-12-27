<?php

namespace Aesislabs\BexioConnector\Request\Accounting\Currencies;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/DeleteCurrency
 */
class DeleteCurrencyRequest extends Request
{
    const API_PATH = '/2.0/currencies/{currency_id}';
    const API_METHOD = 'DELETE';
    const API_VERSION_URL = '/3.0';

    const RESPONSE_CONTAINER = 'Aesislabs\BexioConnector\Container\Success';
}
