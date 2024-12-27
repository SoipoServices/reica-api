<?php
namespace Soiposervices\Http\Requests;

use App\Http\Requests\BaseRequest;
use Saloon\Enums\Method;
use Soiposervices\Http\Enum\Endpoint;

class GetSystemOptionsRequest extends BaseRequest
{
    protected Method $method = Method::GET;
    protected Endpoint $endpoint = Endpoint::SYSTEM_OPTIONS;

}