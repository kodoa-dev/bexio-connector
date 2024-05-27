<?php

namespace Aesislabs\BexioConnector\Request\Projects\CommunicationTypes;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2SearchCommunicationTypes
 */
class SearchCommunicationTypesRequest extends Request
{
    const API_PATH = '/2.0/communication_kind/search';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'array<Aesislabs\BexioConnector\Container\Projects\CommunicationType>';
}
