<?php
namespace  Soiposervices\Reica\Http\Requests;

use Soiposervices\Reica\Http\Requests\BaseRequest;
use Saloon\Enums\Method;
use Soiposervices\Reica\Http\Enum\Endpoint;

class GetSystemOptionsRequest extends BaseRequest
{
    protected Method $method = Method::GET;
    protected Endpoint $endpoint = Endpoint::SYSTEM_OPTIONS;

}