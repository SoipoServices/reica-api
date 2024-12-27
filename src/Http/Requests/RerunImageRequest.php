<?php

namespace App\Http\Requests;

use Saloon\Enums\Method;
use Soiposervices\Reica\Http\Enum\Endpoint;

class RerunImageRequest extends BaseRequest
{
    protected Method $method = Method::POST;
    protected Endpoint $endpoint = Endpoint::RERUN;

    public function __construct(protected ?string $image = null) {}

    public function resolveEndpoint(): string
    {
        return "{$this->endpoint->value}/{$this->image}";
    }
}
