<?php

namespace Aesislabs\BexioConnector\Request\Accounting\CalendarYears;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/ShowCalendarYear
 */
class ShowCalendarYearRequest extends Request
{
    const API_PATH = '/2.0/accounting/calendar_years/{calendar_year_id}';
    const API_METHOD = 'GET';
    const API_VERSION_URL = '/3.0';

    const RESPONSE_CONTAINER = 'Aesislabs\BexioConnector\Container\Accounting\CalendarYear';
}
