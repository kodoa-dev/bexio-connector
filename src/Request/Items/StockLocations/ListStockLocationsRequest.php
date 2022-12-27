<?php

namespace Aesislabs\BexioConnector\Request\Items\StockLocations;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2ListStockLocations
 */
class ListStockLocationsRequest extends Request
{
    const API_PATH = '/2.0/stock';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'array<Aesislabs\BexioConnector\Container\Items\StockLocation>';
}
