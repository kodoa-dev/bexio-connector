<?php

namespace Aesislabs\BexioConnector\Request\Banking\ISPayments;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/ShowISPayment
 */
class ShowISPaymentRequest extends Request
{
    const API_PATH = '/2.0/banking/bank_accounts/{bank_account_id}/is_payments/{payment_id}';
    const API_METHOD = 'GET';
    const API_VERSION_URL = '/3.0';

    const RESPONSE_CONTAINER = 'Aesislabs\BexioConnector\Container\Banking\BankISPayment';
}
