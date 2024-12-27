<?php

test('confirm environment is set to workbench', function () {
    expect(config('app.env'))->toBe('workbench');
});

test('confirm reica base_url is set', function () {
    expect(config('reica.base_url'))->toBe('https://getreica.com/api/v1/');
});

test('confirm reica api_token is set', function () {
    expect(config('reica.api_token'))->toBe('your-api');
});