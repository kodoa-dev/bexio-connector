<?php

namespace Aesislabs\BexioConnector\Request\Accounting\VatPeriods;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/ListVatPeriods
 */
class ListVatPeriodsRequest extends Request
{
    const API_PATH = '/2.0/accounting/vat_periods';
    const API_METHOD = 'GET';
    const API_VERSION_URL = '/3.0';

    const RESPONSE_CONTAINER = 'array<Aesislabs\BexioConnector\Container\Accounting\VatPeriod>';
}
