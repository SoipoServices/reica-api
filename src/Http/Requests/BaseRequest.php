<?php

namespace Soiposervices\Reica\Http\Requests;

use Saloon\Http\Request;
use Soiposervices\Reica\Http\Enum\Endpoint;

abstract class BaseRequest extends Request
{
    protected Endpoint $endpoint;

    public function resolveEndpoint(): string
    {
        return $this->endpoint->value;
    }
}