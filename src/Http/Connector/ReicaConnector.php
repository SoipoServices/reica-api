<?php

namespace Soiposervices\Http\Connector;

use Saloon\Http\Auth\TokenAuthenticator;
use Saloon\Http\Connector;
use Saloon\Traits\Plugins\HasTimeout;

class ForgeConnector extends Connector
{
    use HasTimeout;

    protected int $connectTimeout = 10;
    
    protected int $requestTimeout = 30;

    public function __construct(public readonly string $token) {}
    
    protected function defaultAuth(): TokenAuthenticator
    {
        return new TokenAuthenticator(config('reica.api_token'));
    }

    public function resolveBaseUrl(): string
    {
        return 'https://getreica.com/api/v1/';
    }

    protected function defaultHeaders(): array
    {
        return [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ];
    }
}