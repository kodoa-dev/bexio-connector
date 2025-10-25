<?php

namespace Aesislabs\BexioConnector\Request\Sales\ItemPositions;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2EditItemPosition
 */
class EditItemPositionRequest extends Request
{
    const API_PATH = '/2.0/{kb_document_type}/{document_id}/kb_position_article/{position_id}';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'Aesislabs\BexioConnector\Container\Sales\ItemPosition';
}
