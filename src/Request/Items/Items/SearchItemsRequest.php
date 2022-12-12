<?php

namespace Aesislabs\BexioConnector\Request\Items\Items;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2SearchItems
 */
class SearchItemsRequest extends Request
{
    const API_PATH = '/article/search';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'array<Aesislabs\BexioConnector\Container\Items\Item>';
}
