<?php

namespace Aesislabs\BexioConnector\Request\Accounting\Accounts;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2SearchAccounts
 */
class SearchAccountsRequest extends Request
{
    const API_PATH = '/2.0/accounts/search';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'array<Aesislabs\BexioConnector\Container\Accounting\Account>';
}
