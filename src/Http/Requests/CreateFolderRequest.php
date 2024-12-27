<?php
namespace  Soiposervices\Reica\Http\Requests;

use Soiposervices\Reica\Http\Requests\BaseRequest;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Traits\Body\HasJsonBody;
use Soiposervices\Reica\Http\Enum\Endpoint;
use Soiposervices\Reica\Http\Enum\FolderType;

class CreateFolderRequest extends BaseRequest implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;
    protected Endpoint $endpoint = Endpoint::FOLDERS;

    public function __construct(protected ?string $name = null, protected FolderType $type = FolderType::PHOTO) {}

    public function defaultData(): array
    {
        return [
            'name' => $this->name,
            'type' => $this->type->value,
        ];
    }
}




