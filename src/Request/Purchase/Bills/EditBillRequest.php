<?php

namespace Aesislabs\BexioConnector\Request\Purchase\Bills;

use Aesislabs\BexioConnector\Container\Purchase\Bill;
use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#tag/Bills/operation/ApiBills_PUT
 */
class EditBillRequest extends Request
{
    const API_PATH = '/4.0/purchase/bills/{id}';
    const API_METHOD = 'PUT';

    const RESPONSE_CONTAINER = Bill::class;
}
