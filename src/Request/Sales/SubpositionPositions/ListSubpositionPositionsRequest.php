<?php

namespace Aesislabs\BexioConnector\Request\Sales\SubpositionPositions;

use Aesislabs\BexioConnector\Message\Request;
use Aesislabs\BexioConnector\Request\Sales\DocumentTypeInterface;

/**
 * https://docs.bexio.com/#operation/v2ListSubpositionPositions
 */
class ListSubpositionPositionsRequest extends Request implements DocumentTypeInterface
{
    const API_PATH = '/2.0/{kb_document_type}/{document_id}/kb_position_subposition';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'array<Aesislabs\BexioConnector\Container\Sales\SubpositionPosition>';
}
