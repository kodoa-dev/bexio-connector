<?php

namespace Aesislabs\BexioConnector\Request\Banking\ISRPayments;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/UpdateISRPayment
 */
class UpdateISRPaymentRequest extends Request
{
    const API_PATH = '/2.0/banking/bank_accounts/{bank_account_id}/isr_payments/{payment_id}';
    const API_METHOD = 'PATCH';
    const API_VERSION_URL = '/3.0';

    const RESPONSE_CONTAINER = 'Aesislabs\BexioConnector\Container\Banking\BankISRPayment';
}
