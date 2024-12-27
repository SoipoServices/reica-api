<?php
namespace  Soiposervices\Reica\Http\Requests;

use Soiposervices\Reica\Http\Requests\BaseRequest;
use Saloon\Enums\Method;
use Soiposervices\Reica\Http\Enum\Endpoint;

class GetFolderByIdRequest extends BaseRequest
{
    protected Method $method = Method::GET;
    protected Endpoint $endpoint = Endpoint::FOLDERS;

    public function __construct(protected ?string $id = null) {}

    public function resolveEndpoint(): string
    {
        return "{$this->endpoint->value}/{$this->id}";
    }
}
