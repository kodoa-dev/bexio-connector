<?php

namespace Aesislabs\BexioConnector\Request\Sales\ItemPositions;

use Aesislabs\BexioConnector\Message\Request;
use Aesislabs\BexioConnector\Request\Sales\DocumentTypeInterface;

/**
 * https://docs.bexio.com/#operation/v2ListItemPositions
 */
class ListItemPositionsRequest extends Request implements DocumentTypeInterface
{
    const API_PATH = '/{kb_document_type}/{document_id}/kb_position_article';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'array<Aesislabs\BexioConnector\Container\Sales\ItemPosition>';
}
