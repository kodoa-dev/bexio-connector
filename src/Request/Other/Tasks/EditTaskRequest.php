<?php

namespace Aesislabs\BexioConnector\Request\Other\Tasks;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2EditTask
 */
class EditTaskRequest extends Request
{
    const API_PATH = '/task/{task_id}';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'Aesislabs\BexioConnector\Container\Other\Task';
}
