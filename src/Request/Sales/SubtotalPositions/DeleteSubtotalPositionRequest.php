<?php

namespace Aesislabs\BexioConnector\Request\Sales\SubtotalPositions;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2DeleteSubtotalPosition
 */
class DeleteSubtotalPositionRequest extends Request
{
    const API_PATH = '/{kb_document_type}/{document_id}/kb_position_subtotal/{position_id}';
    const API_METHOD = 'DELETE';

    const RESPONSE_CONTAINER = 'Aesislabs\BexioConnector\Container\Success';
}
