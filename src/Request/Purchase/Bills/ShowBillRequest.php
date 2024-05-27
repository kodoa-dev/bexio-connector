<?php

namespace Aesislabs\BexioConnector\Request\Purchase\Bills;

use Aesislabs\BexioConnector\Container\Purchase\Bill;
use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#tag/Bills/operation/ApiBills_GET
 */
class ShowBillRequest extends Request
{
    public const API_PATH = '/4.0/purchase/bills/{id}';
    public const API_METHOD = 'GET';
    public const RESPONSE_CONTAINER = Bill::class;
}
