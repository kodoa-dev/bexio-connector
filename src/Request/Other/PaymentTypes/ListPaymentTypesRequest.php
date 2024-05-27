<?php

namespace Aesislabs\BexioConnector\Request\Other\PaymentTypes;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2ListPaymentTypes
 */
class ListPaymentTypesRequest extends Request
{
    const API_PATH = '/2.0/payment_type';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'array<Aesislabs\BexioConnector\Container\Other\PaymentType>';
}
