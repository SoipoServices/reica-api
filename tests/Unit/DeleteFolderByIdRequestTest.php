<?php

namespace Soiposervices\Reica\Tests\Unit;

use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;
use Soiposervices\Reica\Http\Connector\ReicaConnector;
use Soiposervices\Reica\Http\Requests\DeleteFolderByIdRequest;

test('can delete a folder by id', function () {
    $mockClient = MockClient::global([
        DeleteFolderByIdRequest::class => MockResponse::make(
            body: [
                'message' => 'Folder deleted successfully',
            ],
            status: 200,
        ),
    ]);

    $conn = new ReicaConnector();

    $request = new DeleteFolderByIdRequest(
        id: "1c090c3f-a004-4fdc-ba76-28adcd75a6ea",
    );

    $response = $conn->send($request);

    $mockClient->assertSent(DeleteFolderByIdRequest::class);
    $mockClient->assertSentCount(1);
        
    expect($response->status())->toBe(200); 
    expect($response->json())->toBeArray()->toHaveKeys(['message']);
    expect($response->json()['message'])->toBe('Folder deleted successfully');
})->group('request');