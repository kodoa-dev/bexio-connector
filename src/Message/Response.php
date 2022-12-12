<?php

namespace Aesislabs\BexioConnector\Message;

abstract class Response
{
    abstract public function isSuccessResponse(): bool;
}
