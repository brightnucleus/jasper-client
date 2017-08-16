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

use Phpro\SoapClient\CodeGenerator\Config\Config;
use Symfony\Component\Filesystem\Filesystem;

// Load Composer autoloader.
$autoloader = dirname(__DIR__) . '/vendor/autoload.php';
if (is_readable($autoloader)) {
    include $autoloader;
}

$filesystem = new Filesystem();

$client = dirname(__DIR__) . '/vendor/bin/soap-client';
$wsdls  = [
    'terminal',
    'billing',
    'sms',
    'echo',
    'alert',
    'account',
    'network-access',
    'event-plan',
    'global-sim-transfer',
    'order',
];

foreach ($wsdls as $wsdl) {
    $config = __DIR__ . "/test-{$wsdl}-config.php";

    // Create destination folder.
    /** @var Config $configObject */
    $configObject = include $config;
    $typeFolder   = $configObject->getDestination();
    $filesystem->mkdir($typeFolder);

    // Generate SOAP type value objects.
    exec("{$client} generate:types --overwrite --config=\"{$config}\"");

    // Generate class map.
    $classMap = dirname(__DIR__) . "/config/test-{$wsdl}-classmap.php";
    exec("{$client} generate:classmap --config=\"{$config}\" > \"{$classMap}\"");
    $classMapString = file_get_contents($classMap);
    $classMapString = str_replace('new ClassMapCollection', 'return new ClassMapCollection', $classMapString);
    file_put_contents($classMap, $classMapString);
}
