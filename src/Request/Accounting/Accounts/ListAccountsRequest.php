<?php

namespace Aesislabs\BexioConnector\Request\Accounting\Accounts;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2ListAccounts
 */
class ListAccountsRequest extends Request
{
    const API_PATH = '/2.0/accounts';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'array<Aesislabs\BexioConnector\Container\Accounting\Account>';
}
