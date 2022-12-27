<?php

namespace Aesislabs\BexioConnector\Request\Purchase\Bills;

use Aesislabs\BexioConnector\Container\Purchase\Bill;
use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#tag/Bills/operation/ApiBillsList_GET
 */
class ListBillsRequest extends Request
{
    public const API_PATH = '/4.0/purchase/bills';
    public const API_METHOD = 'GET';
    public const RESPONSE_CONTAINER = 'array<' . Bill::class . '>';
}
