<?php

namespace Aesislabs\BexioConnector\Request\Other\PaymentTypes;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2SearchPaymentTypes
 */
class SearchPaymentTypesRequest extends Request
{
    const API_PATH = '/2.0/payment_type/search';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'array<Aesislabs\BexioConnector\Container\Other\PaymentType>';
}
