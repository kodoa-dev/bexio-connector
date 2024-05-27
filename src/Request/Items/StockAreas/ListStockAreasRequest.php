<?php

namespace Aesislabs\BexioConnector\Request\Items\StockAreas;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2ListStockAreas
 */
class ListStockAreasRequest extends Request
{
    const API_PATH = '/2.0/stock_place';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'array<Aesislabs\BexioConnector\Container\Items\StockArea>';
}
