<?php

namespace Aesislabs\BexioConnector\Request\Other\Permissions;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/Permissions
 */
class ShowPermissionsRequest extends Request
{
    const API_VERSION_URL = '/3.0';
    const API_PATH = '/permissions';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'Aesislabs\BexioConnector\Container\Other\Permissions';
}
