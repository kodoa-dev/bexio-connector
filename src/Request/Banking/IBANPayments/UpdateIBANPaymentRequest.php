<?php

namespace Aesislabs\BexioConnector\Request\Banking\IBANPayments;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/UpdateIBANPayment
 */
class UpdateIBANPaymentRequest extends Request
{
    const API_PATH = '/banking/bank_accounts/{bank_account_id}/iban_payments/{payment_id}';
    const API_METHOD = 'PATCH';
    const API_VERSION_URL = '/3.0';

    const RESPONSE_CONTAINER = 'Aesislabs\BexioConnector\Container\Banking\BankIBANPayment';
}
