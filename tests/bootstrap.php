<?php
/**
 * Bright Nucleus Jasper Client.
 *
 * SOAP client to interact with the Jasper Wireless Control Center.
 *
 * @package   BrightNucleus\JasperClient
 * @author    Alain Schlesser <alain.schlesser@gmail.com>
 * @license   MIT
 * @link      https://www.brightnucleus.com/
 * @copyright 2017 Alain Schlesser, Bright Nucleus
 */

namespace BrightNucleus\JasperClient;

use VCR\VCR;

define('FIXTURE_DIR', realpath(__DIR__ . '/fixtures'));

if (! defined(JasperClient::CONSTANT_ENVIRONMENT)) {
    define(
        JasperClient::CONSTANT_ENVIRONMENT,
        getenv(JasperClient::CONSTANT_ENVIRONMENT)
    );
}

if (! defined(JasperClient::CONSTANT_API_LICENSE_KEY)) {
    define(
        JasperClient::CONSTANT_API_LICENSE_KEY,
        getenv(JasperClient::CONSTANT_API_LICENSE_KEY)
    );
}

if (! defined(JasperClient::CONSTANT_USERNAME)) {
    define(
        JasperClient::CONSTANT_USERNAME,
        getenv(JasperClient::CONSTANT_USERNAME)
    );
}

if (! defined(JasperClient::CONSTANT_PASSWORD)) {
    define(
        JasperClient::CONSTANT_PASSWORD,
        getenv(JasperClient::CONSTANT_PASSWORD)
    );
}

// Load Composer autoloader.
$autoloader = dirname(__DIR__) . '/vendor/autoload.php';
if (is_readable($autoloader)) {
    include $autoloader;
}

VCR::configure()
    ->setCassettePath(FIXTURE_DIR . '/vcr');

