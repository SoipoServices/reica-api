<?php

namespace  Soiposervices\Reica\Http\Requests;

use Soiposervices\Reica\Http\Requests\BaseRequest;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Traits\Body\HasJsonBody;
use Soiposervices\Reica\Http\Enum\Endpoint;

class AddImageToFolderRequest extends BaseRequest implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;
    protected Endpoint $endpoint = Endpoint::CHILD_FOLDER;

    public function __construct(protected ?string $name = null, protected ?string $folderId = null, protected ?string $url = null) {}

    public function defaultData(): array
    {
        return [
            'name' => $this->name,
            'folder_id' => $this->folderId,
            'url' => $this->url,
        ];
    }
}