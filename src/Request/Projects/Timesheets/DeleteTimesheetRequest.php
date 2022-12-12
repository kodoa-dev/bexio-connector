<?php

namespace Aesislabs\BexioConnector\Request\Projects\Timesheets;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2DeleteTimesheet
 */
class DeleteTimesheetRequest extends Request
{
    const API_PATH = '/timesheet/{timesheet_id}';
    const API_METHOD = 'DELETE';

    const RESPONSE_CONTAINER = 'Aesislabs\BexioConnector\Container\Success';
}
