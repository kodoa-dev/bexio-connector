<?php

namespace Aesislabs\BexioConnector\Request\Banking\ISPayments;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/CreateISPayment
 */
class CreateISPaymentRequest extends Request
{
    const API_PATH = '/banking/bank_accounts/{bank_account_id}/is_payments';
    const API_METHOD = 'POST';
    const API_VERSION_URL = '/3.0';

    const RESPONSE_CONTAINER = 'Aesislabs\BexioConnector\Container\Banking\BankISPayment';
}
