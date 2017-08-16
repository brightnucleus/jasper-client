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

/*
 * Configuration for Bright Nucleus Jasper Client.
 */
$configuration = [
    JasperClient::KEY_ENVIRONMENTS => [
        'sandbox'    => [
            JasperClient::KEY_XSD_URI      => 'http://apitest.jasperwireless.com/ws/schema/JasperAPI.xsd',
            JasperClient::KEY_WSDL_URIS    => [
                'terminal'            => 'http://apitest.jasperwireless.com/ws/schema/Terminal.wsdl',
                'billing'             => 'http://apitest.jasperwireless.com/ws/schema/Billing.wsdl',
                'sms'                 => 'http://apitest.jasperwireless.com/ws/schema/Sms.wsdl',
                'echo'                => 'http://apitest.jasperwireless.com/ws/schema/Echo.wsdl',
                'alert'               => 'http://apitest.jasperwireless.com/ws/schema/Alert.wsdl',
                'account'             => 'http://apitest.jasperwireless.com/ws/schema/Account.wsdl',
                'network-access'      => 'http://apitest.jasperwireless.com/ws/schema/NetworkAccess.wsdl',
                'event-plan'          => 'http://apitest.jasperwireless.com/ws/schema/Eventplan.wsdl',
                'global-sim-transfer' => 'http://apitest.jasperwireless.com/ws/schema/GlobalSimTransfer.wsdl',
                'order'               => 'http://apitest.jasperwireless.com/ws/schema/Order.wsdl',
            ],
            JasperClient::KEY_SOAP_OPTIONS => [
                'trace'      => true,
                'exception'  => true,
                'keep_alive' => true,
                'cache_wsdl' => WSDL_CACHE_DISK,
            ],
        ],
        'production' => [
            JasperClient::KEY_XSD_URI      => 'https://api.jasper.com/ws/schema/JasperAPI.xsd',
            JasperClient::KEY_WSDL_URIS    => [
                'terminal'            => 'https://api.jasper.com/ws/schema/Terminal.wsdl',
                'billing'             => 'https://api.jasper.com/ws/schema/Billing.wsdl',
                'sms'                 => 'https://api.jasper.com/ws/schema/Sms.wsdl',
                'echo'                => 'https://api.jasper.com/ws/schema/Echo.wsdl',
                'alert'               => 'https://api.jasper.com/ws/schema/Alert.wsdl',
                'account'             => 'https://api.jasper.com/ws/schema/Account.wsdl',
                'network-access'      => 'https://api.jasper.com/ws/schema/NetworkAccess.wsdl',
                'event-plan'          => 'https://api.jasper.com/ws/schema/Eventplan.wsdl',
                'global-sim-transfer' => 'https://api.jasper.com/ws/schema/GlobalSimTransfer.wsdl',
                'order'               => 'https://api.jasper.com/ws/schema/Order.wsdl',
                // This link retrieved from the docs looks like it is pointing to the wrong server.
                'add-routable-msisdn' => 'http://apitest.jasperwireless.com/ws/schema/AddRoutableMSISDN.wsdl',
            ],
            JasperClient::KEY_SOAP_OPTIONS => [
                'trace'      => true,
                'exception'  => true,
                'keep_alive' => true,
                'cache_wsdl' => WSDL_CACHE_DISK,
            ],
        ],
    ],
];

/*
 * Return the configuration with a vendor/package prefix.
 */
return [
    'BrightNucleus' => [
        'JasperClient' => $configuration,
    ],
];
