<?php

namespace Aesislabs\BexioConnector\Request\Other\Users;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v3ShowUser
 */
class ShowUserRequest extends Request
{
    const API_PATH = '/2.0/users/{user_id}';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'Aesislabs\BexioConnector\Container\Other\User';
}
