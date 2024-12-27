<?php
namespace Soiposervices\Http\Requests;

use App\Http\Requests\BaseRequest;
use Saloon\Enums\Method;
use Soiposervices\Http\Enum\Endpoint;

class GetImagesRequest extends BaseRequest
{
    protected Method $method = Method::GET;
    protected Endpoint $endpoint = Endpoint::IMAGES;
    
}
