<?php

namespace Soiposervices\Reica\Tests\Unit;

use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;
use Soiposervices\Reica\Http\Connector\ReicaConnector;
use Soiposervices\Reica\Http\Requests\GetFolderByIdRequest;

test('can get a folder by id', function () {
    $mockClient = MockClient::global([
        GetFolderByIdRequest::class => MockResponse::make(
            body: [
                'data' => [
                    'id' => '1c090c3f-a004-4fdc-ba76-28adcd75a6ea',
                    'name' => 'Existing Folder',
                    'type' => 'photo',
                    'created_at' => '2024-12-27T13:51:50.000000Z',
                    'updated_at' => '2024-12-27T13:51:50.000000Z',
                ],
            ],
            status: 200,
        ),
    ]);

    $conn = new ReicaConnector();

    $request = new GetFolderByIdRequest(
        id: "1c090c3f-a004-4fdc-ba76-28adcd75a6ea",
    );

    $response = $conn->send($request);

    $mockClient->assertSent(GetFolderByIdRequest::class);
    $mockClient->assertSentCount(1);
        
    expect($response->status())->toBe(200); 
    expect($response->json())->toBeArray()->toHaveKeys(['data']);
    expect($response->json()['data'])->toBeArray()->toHaveKeys(['id', 'name', 'type', 'created_at', 'updated_at']);
})->group('request');