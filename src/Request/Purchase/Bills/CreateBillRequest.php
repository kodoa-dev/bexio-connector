<?php

namespace Aesislabs\BexioConnector\Request\Purchase\Bills;

use Aesislabs\BexioConnector\Container\Purchase\Bill;
use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#tag/Bills/operation/ApiBills_POST
 */
class CreateBillRequest extends Request
{
    public const API_PATH = '/4.0/purchase/bills';
    public const API_METHOD = 'POST';
    public const RESPONSE_CONTAINER = Bill::class;
}
