<?php

namespace Aesislabs\BexioConnector\Request\Sales\PagebreakPositions;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2EditPagebreakPosition
 */
class EditPagebreakPositionRequest extends Request
{
    const API_PATH = '/{kb_document_type}/{document_id}/kb_position_pagebreak/{position_id}';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'Aesislabs\BexioConnector\Container\Sales\PagebreakPosition';
}
