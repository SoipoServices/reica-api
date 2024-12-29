<?php
namespace Soiposervices\Reica\Tests\Unit;


use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;
use Soiposervices\Reica\Http\Connector\ReicaConnector;
use Soiposervices\Reica\Http\Requests\CreateFolderRequest;
use Soiposervices\Reica\Http\Enum\FolderType;



test('can create a folder', function () {
    $mockClient = MockClient::global([
        CreateFolderRequest::class => MockResponse::make(
            body: [
                'data' => [
                    'id' => '01jg466gsnx05n38tbvm674adv',
                    'name' => 'New Folder',
                    'type' => 'photo',
                    'created_at' => '2024-12-27T13:51:50.000000Z',
                    'updated_at' => '2024-12-27T13:51:50.000000Z',
                ],
            ],
            status: 200,
        ),
    ]);

    $conn = new ReicaConnector();

    $request = new CreateFolderRequest(
        name: "New Folder",
        type: FolderType::PHOTO,
    );

    $response = $conn->send($request);

    $mockClient->assertSent(CreateFolderRequest::class);
    $mockClient->assertSentCount(1);
        
    expect($response->status())->toBe(200); 
    expect($response->json())->toBeArray()->toHaveKeys(['data']);
    expect($response->json()['data'])->toBeArray()->toHaveKeys(['id', 'name', 'type', 'created_at', 'updated_at']);
    expect($response->json()['data']['type'])->toBe('photo');
})->group('request');