<?php

namespace Aesislabs\BexioConnector\Request\Sales\TextPositions;

use Aesislabs\BexioConnector\Message\Request;
use Aesislabs\BexioConnector\Request\Sales\DocumentTypeInterface;

/**
 * https://docs.bexio.com/#operation/v2ShowTextPosition
 */
class ShowTextPositionRequest extends Request implements DocumentTypeInterface
{
    const API_PATH = '/{kb_document_type}/{document_id}/kb_position_text/{position_id}';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'Aesislabs\BexioConnector\Container\Sales\TextPosition';
}
