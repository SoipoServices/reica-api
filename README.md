# Official Reica API Package


[![Latest Version on Packagist](https://img.shields.io/packagist/v/soiposervices/reica.svg?style=flat-square)](https://packagist.org/packages/soiposervices/reica)
[![Total Downloads](https://img.shields.io/packagist/dt/soiposervices/reica.svg?style=flat-square)](https://packagist.org/packages/soiposervices/reica)
[![run-tests](https://github.com/SoipoServices/reica-api/actions/workflows/tests.yml/badge.svg?branch=main)](https://github.com/SoipoServices/reica-api/actions/workflows/tests.yml)


This package provides a seamless interface to interact with the getreica.com API, enabling developers to access its powerful image generation and manipulation features. Designed with ease of use in mind, this client simplifies integration into your applications, allowing you to leverage getreica’s capabilities for creating realistic images tailored to your needs.

Key Features:
	•	Easy Authentication: Quickly authenticate and manage API keys.
	•	Image Generation: Access advanced tools for generating realistic visuals.
	•	Customization: Fine-tune image parameters to match specific requirements.
	•	Lightweight & Fast: Minimal dependencies ensure smooth performance.
	•	Error Handling: Comprehensive error handling for robust integrations.

Ideal For:

Developers working on e-commerce, fashion, or creative projects seeking to enhance their applications with high-quality, AI-generated images.

Head to https://getreica.com/user/api-tokens register for free, to get your API key, and start using the package.

## Installation

You can install the package via composer:

```bash
composer require soiposervices/reica
```

## Usage

The purpose of this package is to provide a simple and intuitive interface to interact with the getreica.com API. The package is designed to be easy to use, with minimal dependencies and a straightforward API structure. The following sections provide an overview of the package’s key features and usage examples.

### Authentication

To authenticate with the getreica.com API, you need to provide your API key. You can obtain your API key by registering at https://getreica.com/user/api-tokens. Once you have your API key, you can use it to authenticate with the API, setting the .env variable `REICA_API_TOKEN`.

```php
	REICA_API_TOKEN=your-api-token;
```

### Sending Requests

We use Saloon 3, a package that provides a simple and intuitive interface for sending HTTP requests. The ReicaConnector class is responsible for sending requests to the getreica.com API. You can create an instance of the ReicaConnector class and use it to send requests to the API.


```php
    $conn = new ReicaConnector();

    $request = new CreateChildFolderRequest(
        name: "New Folder",
        folderId: "1c090c3f-a004-4fdc-ba76-28adcd75a6ea",
    );

    $response = $conn->send($request);
```

### Api documentation

To get a list of all available requests, you can check the [API documentation](https://getreica.com/docs).

### Testing

```bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email luigi@soiposervices.com instead of using the issue tracker.

## Credits

-   [Luigi Laezza](https://github.com/soiposervices)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
