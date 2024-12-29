<?php

namespace Soiposervices\Reica\Tests\Unit;

use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;
use Soiposervices\Reica\Http\Connector\ReicaConnector;
use Soiposervices\Reica\Http\Requests\GetSystemOptionsRequest;

test('can get system options', function () {
    $mockClient = MockClient::global([
        GetSystemOptionsRequest::class => MockResponse::make(
            body: [
                'data' => [
                    'option1' => 'value1',
                    'option2' => 'value2',
                ],
            ],
            status: 200,
        ),
    ]);

    $conn = new ReicaConnector();

    $request = new GetSystemOptionsRequest();

    $response = $conn->send($request);

    $mockClient->assertSent(GetSystemOptionsRequest::class);
    $mockClient->assertSentCount(1);
        
    expect($response->status())->toBe(200); 
    expect($response->json())->toBeArray()->toHaveKeys(['data']);
    expect($response->json()['data'])->toBeArray()->toHaveKeys(['option1', 'option2']);
    expect($response->json()['data']['option1'])->toBe('value1');
    expect($response->json()['data']['option2'])->toBe('value2');
})->group('request');