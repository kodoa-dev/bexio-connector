<?php

namespace Aesislabs\BexioConnector\Request\Accounting\Currencies;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/ListExchangeRatesForCurrency
 */
class ListExchangeRatesRequest extends Request
{
    const API_PATH = '/2.0/currencies/{currency_id}/exchange_rates';
    const API_METHOD = 'GET';
    const API_VERSION_URL = '/3.0';

    const RESPONSE_CONTAINER = 'array<Aesislabs\BexioConnector\Container\Accounting\ExchangeRate>';
}
