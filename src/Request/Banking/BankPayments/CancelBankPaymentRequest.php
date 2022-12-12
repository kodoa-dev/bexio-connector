<?php

namespace Aesislabs\BexioConnector\Request\Banking\BankPayments;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/CancelPayment
 */
class CancelBankPaymentRequest extends Request
{
    const API_PATH = '/banking/payments/{payment_id}/cancel';
    const API_METHOD = 'POST';
    const API_VERSION_URL = '/3.0';

    const RESPONSE_CONTAINER = 'Aesislabs\BexioConnector\Container\Banking\BankPayment';
}
