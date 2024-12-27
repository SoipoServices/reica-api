<?php

namespace Soiposervices\Reica\Http\Connector;

use Saloon\Http\Auth\TokenAuthenticator;
use Saloon\Http\Connector;
use Saloon\Traits\Plugins\HasTimeout;

class ReicaConnector extends Connector
{
    use HasTimeout;

    protected int $connectTimeout = 10;
    
    protected int $requestTimeout = 30;

    public function __construct() {}
    
    protected function defaultAuth(): TokenAuthenticator
    {
        return new TokenAuthenticator(config('reica.api_token'));
    }

    public function resolveBaseUrl(): string
    {
        return config('reica.base_url');
    }

    protected function defaultHeaders(): array
    {
        return [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ];
    }
}