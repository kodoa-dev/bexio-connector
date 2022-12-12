<?php

namespace Aesislabs\BexioConnector\Request\Other\Tasks;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2SearchTasks
 */
class SearchTasksRequest extends Request
{
    const API_PATH = '/task/search';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'array<Aesislabs\BexioConnector\Container\Other\Task>';
}
