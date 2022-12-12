<?php

namespace Aesislabs\BexioConnector\Request\Projects\Timesheets;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2ListTimesheets
 */
class ListTimesheetsRequest extends Request
{
    const API_PATH = '/timesheet';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'array<Aesislabs\BexioConnector\Container\Projects\Timesheet>';
}
