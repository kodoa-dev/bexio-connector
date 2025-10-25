<?php

namespace Aesislabs\BexioConnector\Request\Banking\BankPayments;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/DeletePayment
 */
class DeleteBankPaymentRequest extends Request
{
    const API_PATH = '/2.0/banking/payments/{payment_id}';
    const API_METHOD = 'DELETE';
    const API_VERSION_URL = '/3.0';

    const RESPONSE_CONTAINER = 'Aesislabs\BexioConnector\Container\Success';
}
