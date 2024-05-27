<?php

namespace Aesislabs\BexioConnector\Request\Sales\DefaultPositions;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2EditefaultPosition
 */
class EditDefaultPositionRequest extends Request
{
    const API_PATH = '/2.0/{kb_document_type}/{document_id}/kb_position_custom/{position_id}';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'Aesislabs\BexioConnector\Container\Sales\DefaultPosition';
}
