<?php

namespace Aesislabs\BexioConnector\Request\Accounting\Currencies;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/CreateCurrency
 */
class CreateCurrencyRequest extends Request
{
    const API_PATH = '/currencies';
    const API_METHOD = 'POST';
    const API_VERSION_URL = '/3.0';

    const RESPONSE_CONTAINER = 'Aesislabs\BexioConnector\Container\Accounting\Currency';
}
