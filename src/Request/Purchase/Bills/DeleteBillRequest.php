<?php

namespace Aesislabs\BexioConnector\Request\Purchase\Bills;

use Aesislabs\BexioConnector\Container\Success;
use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#tag/Bills/operation/ApiBills_DELETE
 */
class DeleteBillRequest extends Request
{
    const API_PATH = '/4.0/purchase/bills/{id}';
    const API_METHOD = 'DELETE';

    const RESPONSE_CONTAINER = Success::class;
}
