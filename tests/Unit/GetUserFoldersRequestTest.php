<?php

namespace Soiposervices\Reica\Tests\Unit;

use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;
use Soiposervices\Reica\Http\Connector\ReicaConnector;
use Soiposervices\Reica\Http\Requests\GetUserFoldersRequest;

test('can get user folders', function () {
    $mockClient = MockClient::global([
        GetUserFoldersRequest::class => MockResponse::make(
            body: [
                'data' => [
                    [
                        'id' => '1c090c3f-a004-4fdc-ba76-28adcd75a6ea',
                        'name' => 'User Folder 1',
                        'type' => 'photo',
                        'created_at' => '2024-12-27T13:51:50.000000Z',
                        'updated_at' => '2024-12-27T13:51:50.000000Z',
                    ],
                    [
                        'id' => '2d090c3f-a004-4fdc-ba76-28adcd75a6eb',
                        'name' => 'User Folder 2',
                        'type' => 'document',
                        'created_at' => '2024-12-28T13:51:50.000000Z',
                        'updated_at' => '2024-12-28T13:51:50.000000Z',
                    ],
                ],
            ],
            status: 200,
        ),
    ]);

    $conn = new ReicaConnector();

    $request = new GetUserFoldersRequest();

    $response = $conn->send($request);

    $mockClient->assertSent(GetUserFoldersRequest::class);
    $mockClient->assertSentCount(1);
        
    expect($response->status())->toBe(200); 
    expect($response->json())->toBeArray()->toHaveKeys(['data']);
    expect($response->json()['data'])->toBeArray()->toHaveCount(2);
    expect($response->json()['data'][0])->toBeArray()->toHaveKeys(['id', 'name', 'type', 'created_at', 'updated_at']);
    expect($response->json()['data'][1])->toBeArray()->toHaveKeys(['id', 'name', 'type', 'created_at', 'updated_at']);
})->group('request');