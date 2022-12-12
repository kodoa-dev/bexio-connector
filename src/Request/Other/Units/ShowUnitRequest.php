<?php

namespace Aesislabs\BexioConnector\Request\Other\Units;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2ShowUnit
 */
class ShowUnitRequest extends Request
{
    const API_PATH = '/unit/{unit_id}';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'Aesislabs\BexioConnector\Container\Other\Unit';
}
