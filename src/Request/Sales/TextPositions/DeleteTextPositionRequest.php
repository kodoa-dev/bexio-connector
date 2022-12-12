<?php

namespace Aesislabs\BexioConnector\Request\Sales\TextPositions;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2DeleteTextPosition
 */
class DeleteTextPositionRequest extends Request
{
    const API_PATH = '/{kb_document_type}/{document_id}/kb_position_text/{position_id}';
    const API_METHOD = 'DELETE';

    const RESPONSE_CONTAINER = 'Aesislabs\BexioConnector\Container\Success';
}
