<?php

declare(strict_types=1);

namespace App\Controller\Operation;

use Slim\Http\Request;
use Slim\Http\Response;

final class Delete extends Base
{
    public function __invoke(Request $request, Response $response, array $args): Response
    {
        $this->getOperationService()->delete((int) $args['id']);

        return $this->jsonResponse($response, 'success', null, 204);
    }
}
