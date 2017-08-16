# Bright Nucleus Jasper Client

[![Latest Stable Version](https://img.shields.io/packagist/v/brightnucleus/jasper-client.svg)](https://packagist.org/packages/brightnucleus/jasper-client)
[![Total Downloads](https://img.shields.io/packagist/dt/brightnucleus/jasper-client.svg)](https://packagist.org/packages/brightnucleus/jasper-client)
[![Latest Unstable Version](https://img.shields.io/packagist/vpre/brightnucleus/jasper-client.svg)](https://packagist.org/packages/brightnucleus/jasper-client)
[![License](https://img.shields.io/packagist/l/brightnucleus/jasper-client.svg)](https://packagist.org/packages/brightnucleus/jasper-client)

SOAP client to interact with the Jasper Wireless Control Center.

> This library is not yet feature-complete and still a work-in-progress.

## Table Of Contents

* [Installation](#installation)
* [Basic Usage](#basic-usage)
* [Running The Tests](#running-the-tests)
* [Contributing](#contributing)
* [License](#license)

## Installation

The best way to use this package is through Composer:

```BASH
composer require brightnucleus/jasper-client
```

## Basic Usage

The general usage is pretty simple. You fetch an instance of the client you need, and then call one of its methods, passing in the corresponding request value object to set the parameters.

Example:

```php
use Brightucleus\JasperClient\EchoClient;
use Brightucleus\JasperClient\SoapTypes\EchoClient\EchoRequest;

$client = new EchoClient();
$result = $client->echo(new EchoRequest('Hello World!'));


echo $result->getValue(); // Output: 'Hello World!'
```

To find out how to configure a request, see the constructor in the corresponding request value object.

A specific request will always return the matching response, provided the request was successful.

If the request was unsuccessful, a `SoapException` will be thrown.

## Running The Tests

To run the tests, you need to set environment variables, so that the test code knows how to connect to the correct Jasper environment.

```BASH
export CISCO_JASPER_API_ENVIRONMENT=sandbox
export CISCO_JASPER_API_LICENSE_KEY=<your API license key>
export CISCO_JASPER_USERNAME=<login username>
export CISCO_JASPER_PASSWORD=<login password>
export CISCO_JASPER_TEST_ACCOUNT_ID=<test account ID>
```

Then you can run all the tests with the following command:

```BASH
vendor/bin/phpunit
```

To run only a specific test suite, you can use the following command:
```BASH
vendor/bin/phpunit --testsuite=<suites to test, separated with commas>
```

You can get a list of available test suites with the following command:
```BASH
vendor/bin/phpunit --list-suites
```

## Contributing

All feedback / bug reports / pull requests are welcome.

## License

Copyright (c) 2017 Alain Schlesser, Bright Nucleus

This code is licensed under the [MIT License](LICENSE).
