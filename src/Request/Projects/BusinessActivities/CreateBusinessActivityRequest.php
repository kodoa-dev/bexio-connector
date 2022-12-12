<?php

namespace Aesislabs\BexioConnector\Request\Projects\BusinessActivities;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2CreateBusinessActivity
 */
class CreateBusinessActivityRequest extends Request
{
    const API_PATH = '/client_service';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'Aesislabs\BexioConnector\Container\Projects\BusinessActivity';
}
