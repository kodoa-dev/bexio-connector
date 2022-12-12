<?php

namespace Aesislabs\BexioConnector\Request\Items\Items;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2ListItems
 */
class ListItemsRequest extends Request
{
    const API_PATH = '/article';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'array<Aesislabs\BexioConnector\Container\Items\Item>';
}
