<?php

/*
 * Here you can set the api key to connect to the API, head to https://getreica.com/user/api-tokens to get your API key
 */
return [
    'base_url' => env('REICA_BASE_URL', 'https://getreica.com/api/v1/'),
    'api_token' => env('REICA_API_TOKEN', 'your-api')
];