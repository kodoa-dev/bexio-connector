<?php

namespace Aesislabs\BexioConnector\Request\Other\Tasks;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2ShowTask
 */
class ShowTaskRequest extends Request
{
    const API_PATH = '/2.0/task/{task_id}';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'Aesislabs\BexioConnector\Container\Other\Task';
}
