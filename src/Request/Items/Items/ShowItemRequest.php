<?php

namespace Aesislabs\BexioConnector\Request\Items\Items;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2ShowItem
 */
class ShowItemRequest extends Request
{
    const API_PATH = '/article/{article_id}';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'Aesislabs\BexioConnector\Container\Items\Item';
}
