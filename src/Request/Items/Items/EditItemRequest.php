<?php

namespace Aesislabs\BexioConnector\Request\Items\Items;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2EditItem
 */
class EditItemRequest extends Request
{
    const API_PATH = '/2.0/article/{article_id}';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'Aesislabs\BexioConnector\Container\Items\Item';
}
