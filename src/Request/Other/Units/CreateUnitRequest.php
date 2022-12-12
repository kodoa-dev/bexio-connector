<?php

namespace Aesislabs\BexioConnector\Request\Other\Units;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2CreateUnit
 */
class CreateUnitRequest extends Request
{
    const API_PATH = '/unit';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'Aesislabs\BexioConnector\Container\Other\Unit';
}
