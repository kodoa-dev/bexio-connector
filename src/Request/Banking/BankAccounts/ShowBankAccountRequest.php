<?php

namespace Aesislabs\BexioConnector\Request\Banking\BankAccounts;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/ShowBankAccount
 */
class ShowBankAccountRequest extends Request
{
    const API_PATH = '/2.0/banking/accounts/{bank_account_id}';
    const API_METHOD = 'GET';
    const API_VERSION_URL = '/3.0';

    const RESPONSE_CONTAINER = 'Aesislabs\BexioConnector\Container\Banking\BankAccount';
}
