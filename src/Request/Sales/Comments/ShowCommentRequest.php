<?php

namespace Aesislabs\BexioConnector\Request\Sales\Comments;

use Aesislabs\BexioConnector\Message\Request;
use Aesislabs\BexioConnector\Request\Sales\DocumentTypeInterface;

/**
 * https://docs.bexio.com/#operation/v2ShowComment
 */
class ShowCommentRequest extends Request implements DocumentTypeInterface
{
    const API_PATH = '/2.0/{kb_document_type}/{document_id}/comment/{comment_id}';
    const API_METHOD = 'GET';

    const RESPONSE_CONTAINER = 'Aesislabs\BexioConnector\Container\Sales\Comment';
}
