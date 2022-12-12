<?php

namespace Aesislabs\BexioConnector\Request\Sales\SubpositionPositions;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2DeleteSubpositionPosition
 */
class DeleteSubpositionPositionRequest extends Request
{
    const API_PATH = '/{kb_document_type}/{document_id}/kb_position_subposition/{position_id}';
    const API_METHOD = 'DELETE';

    const RESPONSE_CONTAINER = 'Aesislabs\BexioConnector\Container\Success';
}
