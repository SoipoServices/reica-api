<?php
namespace Soiposervices\Http\Requests;

use App\Http\Requests\BaseRequest;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Traits\Body\HasJsonBody;
use Soiposervices\Http\Enum\Endpoint;
use Soiposervices\Http\Enum\FolderType;

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




