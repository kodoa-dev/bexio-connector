<?php

namespace Aesislabs\BexioConnector\Request\Other\Tasks;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2ListTaskPriorities
 */
class ListTaskPrioritiesRequest extends Request
{
    const API_PATH = '/2.0/todo_priority';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'array<Aesislabs\BexioConnector\Container\Other\TaskPriority>';
}
