<?php

namespace Soiposervices\Reica\Tests\Unit;


use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;
use Soiposervices\Reica\Http\Connector\ReicaConnector;
use Soiposervices\Reica\Http\Requests\CreateChildFolderRequest;

test('can create a child folder', function () {
    $mockClient = MockClient::global([
        CreateChildFolderRequest::class => MockResponse::make(
            body: [
                'data' => [
                    'id' => '01jg466gsnx05n38tbvm674adv',
                    'name' => 'New Folder',
                    'parent_id' => '1c090c3f-a004-4fdc-ba76-28adcd75a6ea',
                    'created_at' => '2024-12-27T13:51:50.000000Z',
                    'updated_at' => '2024-12-27T13:51:50.000000Z',
                ],
            ],
            status: 200,
        ),
    ]);

    $conn = new ReicaConnector();

    $request = new CreateChildFolderRequest(
        name: "New Folder",
        folderId: "1c090c3f-a004-4fdc-ba76-28adcd75a6ea",
    );

    $response = $conn->send($request);

    $mockClient->assertSent(CreateChildFolderRequest::class);
    $mockClient->assertSentCount(1);
        
    expect($response->status())->toBe(200); 
    expect($response->json())->toBeArray()->toHaveKeys(['data']);
    expect($response->json()['data'])->toBeArray()->toHaveKeys(['id', 'name', 'parent_id', 'created_at', 'updated_at']);
    expect($response->json()['data']['parent_id'])->toBe('1c090c3f-a004-4fdc-ba76-28adcd75a6ea');

})->group('request');