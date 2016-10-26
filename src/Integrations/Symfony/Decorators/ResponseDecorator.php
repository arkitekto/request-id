<?php

/*
 * This file is part of the Arkitekto\RequestId library.
 *
 * (c) Alexandru Furculita <alex@furculita.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.md.
 */

namespace Arki\RequestId\Integrations\Symfony\Decorators;

use Symfony\Component\HttpFoundation\Response;

interface ResponseDecorator
{
    /**
     * @param Response $response
     *
     * @return Response
     */
    public function decorateResponse(Response $response);
}
