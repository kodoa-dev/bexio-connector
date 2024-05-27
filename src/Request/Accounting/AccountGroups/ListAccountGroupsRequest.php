<?php

namespace Aesislabs\BexioConnector\Request\Accounting\AccountGroups;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2ListAccountGroups
 */
class ListAccountGroupsRequest extends Request
{
    const API_PATH = '/2.0/account_groups';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'array<Aesislabs\BexioConnector\Container\Accounting\AccountGroup>';
}
