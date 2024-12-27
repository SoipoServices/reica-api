<?php
namespace Soiposervices\Http\Requests;

use App\Http\Requests\BaseRequest;
use Saloon\Enums\Method;
use Soiposervices\Http\Enum\Endpoint;

class DeleteFolderByIdRequest extends BaseRequest
{
    protected Method $method = Method::DELETE;
    protected Endpoint $endpoint = Endpoint::FOLDERS;

    public function __construct(protected ?string $id = null) {}

    public function resolveEndpoint(): string
    {
        return "{$this->endpoint->value}/{$this->id}";
    }
}