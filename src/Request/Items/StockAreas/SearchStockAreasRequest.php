<?php

namespace Aesislabs\BexioConnector\Request\Items\StockAreas;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2SearchStockAreas
 */
class SearchStockAreasRequest extends Request
{
    const API_PATH = '/2.0/stock_place/search';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'array<Aesislabs\BexioConnector\Container\Items\StockArea>';
}
