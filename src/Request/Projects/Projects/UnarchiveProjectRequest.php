<?php

namespace Aesislabs\BexioConnector\Request\Projects\Projects;

use Aesislabs\BexioConnector\Message\Request;

/**
 * https://docs.bexio.com/#operation/v2UnarchiveProject
 */
class UnarchiveProjectRequest extends Request
{
    const API_PATH = '/pr_project/{project_id}/reactivate';
    const API_METHOD = 'POST';

    const RESPONSE_CONTAINER = 'Aesislabs\BexioConnector\Container\Success';
}
