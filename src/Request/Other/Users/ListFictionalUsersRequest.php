<?php

namespace Aesislabs\BexioConnector\Request\Other\Users;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v3ListFictionalUsers
 */
class ListFictionalUsersRequest extends Request
{
    const API_VERSION_URL = '/3.0';
    const API_PATH = '/2.0/fictional_users';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'array<Aesislabs\BexioConnector\Container\Other\FictionalUser>';
}
