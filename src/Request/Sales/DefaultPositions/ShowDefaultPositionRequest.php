<?php

namespace Aesislabs\BexioConnector\Request\Sales\DefaultPositions;

use Aesislabs\BexioConnector\Message\Request;
use Aesislabs\BexioConnector\Request\Sales\DocumentTypeInterface;

/**
 * https://docs.bexio.com/#operation/v2ShowDefaultPosition
 */
class ShowDefaultPositionRequest extends Request implements DocumentTypeInterface
{
    const API_PATH = '/{kb_document_type}/{document_id}/kb_position_custom/{position_id}';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'Aesislabs\BexioConnector\Container\Sales\DefaultPosition';
}
