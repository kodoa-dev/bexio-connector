<?php

namespace Aesislabs\BexioConnector\Request\Projects\Timesheets;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2EditTimesheet
 */
class EditTimesheetRequest extends Request
{
    const API_PATH = '/2.0/timesheet/{timesheet_id}';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'Aesislabs\BexioConnector\Container\Projects\Timesheet';
}
