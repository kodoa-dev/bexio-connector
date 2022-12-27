<?php

namespace Aesislabs\BexioConnector\Request\Projects\Timesheets;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2ListTimeSheetStatus
 */
class ListTimesheetStatusRequest extends Request
{
    const API_PATH = '/2.0/timesheet_status';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'array<Aesislabs\BexioConnector\Container\Projects\TimesheetStatus>';
}
