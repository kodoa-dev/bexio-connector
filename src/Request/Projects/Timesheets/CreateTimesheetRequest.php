<?php

namespace Aesislabs\BexioConnector\Request\Projects\Timesheets;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2CreateTimesheet
 */
class CreateTimesheetRequest extends Request
{
    const API_PATH = '/2.0/timesheet';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'Aesislabs\BexioConnector\Container\Projects\Timesheet';
}
