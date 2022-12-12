<?php

namespace Aesislabs\BexioConnector\Request\Sales\Comments;

use Aesislabs\BexioConnector\Message\Request;
use Aesislabs\BexioConnector\Request\Sales\DocumentTypeInterface;

/**
 * https://docs.bexio.com/#operation/v2CreateComment
 */
class CreateCommentRequest extends Request implements DocumentTypeInterface
{
    const API_PATH = '/{kb_document_type}/{document_id}/comment';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'Aesislabs\BexioConnector\Container\Sales\Comment';
}
