<?php

namespace Aesislabs\BexioConnector\Request\Other\Units;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2ListUnits
 */
class ListUnitsRequest extends Request
{
    const API_PATH = '/2.0/unit';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'array<Aesislabs\BexioConnector\Container\Other\Unit>';
}
