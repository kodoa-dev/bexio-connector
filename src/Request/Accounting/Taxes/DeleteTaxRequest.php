<?php

namespace Aesislabs\BexioConnector\Request\Accounting\Taxes;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/DeleteTax
 */
class DeleteTaxRequest extends Request
{
    const API_PATH = '/2.0/taxes/{tax_id}';
    const API_METHOD = 'DELETE';

    const RESPONSE_CONTAINER = 'Aesislabs\BexioConnector\Container\Success';
}
