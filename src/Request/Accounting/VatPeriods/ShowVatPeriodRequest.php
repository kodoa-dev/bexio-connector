<?php

namespace Aesislabs\BexioConnector\Request\Accounting\VatPeriods;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/ShowVatPeriod
 */
class ShowVatPeriodRequest extends Request
{
    const API_PATH = '/accounting/vat_periods/{vat_period_id}';
    const API_METHOD = 'GET';
    const API_VERSION_URL = '/3.0';

    const RESPONSE_CONTAINER = 'Aesislabs\BexioConnector\Container\Accounting\VatPeriod';
}
