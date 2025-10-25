<?php

namespace Aesislabs\BexioConnector\Request\Sales\PagebreakPositions;

use Aesislabs\BexioConnector\Message\Request;
use Aesislabs\BexioConnector\Request\Sales\DocumentTypeInterface;

/**
 * https://docs.bexio.com/#operation/v2ShowPagebreakPosition
 */
class ShowPagebreakPositionRequest extends Request implements DocumentTypeInterface
{
    const API_PATH = '/2.0/{kb_document_type}/{document_id}/kb_position_pagebreak/{position_id}';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'Aesislabs\BexioConnector\Container\Sales\PagebreakPosition';
}
