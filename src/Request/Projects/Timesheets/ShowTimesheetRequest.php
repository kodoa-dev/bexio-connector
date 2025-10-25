<?php

namespace Aesislabs\BexioConnector\Request\Projects\Timesheets;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2ShowTimesheet
 */
class ShowTimesheetRequest extends Request
{
    const API_PATH = '/2.0/timesheet/{timesheet_id}';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'Aesislabs\BexioConnector\Container\Projects\Timesheet';
}
