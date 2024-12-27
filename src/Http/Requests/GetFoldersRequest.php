<?php
namespace Soiposervices\Http\Requests;

use App\Http\Requests\BaseRequest;
use Saloon\Enums\Method;
use Soiposervices\Http\Enum\Endpoint;

class GetUserFoldersRequest extends BaseRequest
{
    protected Method $method = Method::GET;
    protected Endpoint $endpoint = Endpoint::FOLDERS;
}
