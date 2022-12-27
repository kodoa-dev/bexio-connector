<?php

namespace Aesislabs\BexioConnector\Request\Sales\SubtotalPositions;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2EditSubtotalPosition
 */
class EditSubtotalPositionRequest extends Request
{
    const API_PATH = '/2.0/{kb_document_type}/{document_id}/kb_position_subtotal/{position_id}';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'Aesislabs\BexioConnector\Container\Sales\SubtotalPosition';
}
