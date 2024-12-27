<?php

namespace Soiposervices\Reica\Tests\Unit;

use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;
use Soiposervices\Reica\Http\Connector\ReicaConnector;
use Soiposervices\Reica\Http\Requests\AddImageToFolderRequest;


test('can add an image to a folder', function () {
    
    $mockClient = MockClient::global([
        AddImageToFolderRequest::class => MockResponse::make(
            body: [
                'data' => [
                    'id' => '01jg466gsnx05n38tbvm674adv',
                    'name' => 'quia',
                    'type' => 'model',
                    'user_id' => 1101,
                    'parent_id' => null,
                    'created_at' => '2024-12-27T13:51:50.000000Z',
                    'updated_at' => '2024-12-27T13:51:50.000000Z',
                ],
            ],
            status: 200,
        ),
    ]);

    $conn = new ReicaConnector();

    $request = new AddImageToFolderRequest(
        name: "A folder Name",
        folderId: "1c090c3f-a004-4fdc-ba76-28adcd75a6ea",
        url: "https://app.getreica.com/build/assets/cover-DqbVizIU.png",
    );

    $response = $conn->send($request);

    $mockClient->assertSent(AddImageToFolderRequest::class);
    $mockClient->assertSentCount(1);
        
    expect($response->status())->toBe(200); 
    expect($response->json())->toBeArray()->toHaveKeys(['data']);
    expect($response->json()['data'])->toBeArray()->toHaveKeys(['id', 'name', 'type', 'user_id', 'parent_id', 'created_at', 'updated_at']);


})->group('request');