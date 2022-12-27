<?php

namespace Aesislabs\BexioConnector\Request\Sales\TextPositions;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2EditTextPosition
 */
class EditTextPositionRequest extends Request
{
    const API_PATH = '/2.0/{kb_document_type}/{document_id}/kb_position_text/{position_id}';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'Aesislabs\BexioConnector\Container\Sales\TextPosition';
}
