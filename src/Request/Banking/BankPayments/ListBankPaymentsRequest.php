<?php

namespace Aesislabs\BexioConnector\Request\Banking\BankPayments;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/ListPayments
 */
class ListBankPaymentsRequest extends Request
{
    const API_PATH = '/2.0/banking/payments';
    const API_METHOD = 'GET';
    const API_VERSION_URL = '/3.0';

    const RESPONSE_CONTAINER = 'array<Aesislabs\BexioConnector\Container\Banking\BankPayment>';
}
