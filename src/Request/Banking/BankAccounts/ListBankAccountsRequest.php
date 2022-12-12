<?php

namespace Aesislabs\BexioConnector\Request\Banking\BankAccounts;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/ListBankAccounts
 */
class ListBankAccountsRequest extends Request
{
    const API_PATH = '/banking/accounts';
    const API_METHOD = 'GET';
    const API_VERSION_URL = '/3.0';

    const RESPONSE_CONTAINER = 'array<Aesislabs\BexioConnector\Container\Banking\BankAccount>';
}
