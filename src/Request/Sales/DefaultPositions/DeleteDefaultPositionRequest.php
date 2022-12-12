<?php

namespace Aesislabs\BexioConnector\Request\Sales\DefaultPositions;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2DeleteDefaultPosition
 */
class DeleteDefaultPositionRequest extends Request
{
    const API_PATH = '/{kb_document_type}/{document_id}/kb_position_custom/{position_id}';
    const API_METHOD = 'DELETE';

    const RESPONSE_CONTAINER = 'Aesislabs\BexioConnector\Container\Success';
}
