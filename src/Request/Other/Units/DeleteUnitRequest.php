<?php

namespace Aesislabs\BexioConnector\Request\Other\Units;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/DeleteUnit
 */
class DeleteUnitRequest extends Request
{
    const API_PATH = '/2.0/unit/{unit_id}';
    const API_METHOD = 'DELETE';

    const RESPONSE_CONTAINER = 'Aesislabs\BexioConnector\Container\Success';
}
