<?php

namespace Aesislabs\BexioConnector\Request\Sales\SubpositionPositions;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2EditSubpositionPosition
 */
class EditSubpositionPositionRequest extends Request
{
    const API_PATH = '/{kb_document_type}/{document_id}/kb_position_subposition/{position_id}';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'Aesislabs\BexioConnector\Container\Sales\SubpositionPosition';
}
