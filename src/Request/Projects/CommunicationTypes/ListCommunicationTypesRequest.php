<?php

namespace Aesislabs\BexioConnector\Request\Projects\CommunicationTypes;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2ListCommunicationTypes
 */
class ListCommunicationTypesRequest extends Request
{
    const API_PATH = '/communication_kind';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'array<Aesislabs\BexioConnector\Container\Projects\CommunicationType>';
}
