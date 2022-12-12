<?php

namespace Aesislabs\BexioConnector\Request\Other\Tasks;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2ListTaskStatus
 */
class ListTaskStatusesRequest extends Request
{
    const API_PATH = '/todo_status';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'array<Aesislabs\BexioConnector\Container\Other\TaskStatus>';
}
