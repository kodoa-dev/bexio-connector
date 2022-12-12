<?php

namespace Aesislabs\BexioConnector\Request\Sales\DiscountPositions;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2EditDiscountPosition
 */
class EditDiscountPositionRequest extends Request
{
    const API_PATH = '/{kb_document_type}/{document_id}/kb_position_discount/{position_id}';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'Aesislabs\BexioConnector\Container\Sales\DiscountPosition';
}
