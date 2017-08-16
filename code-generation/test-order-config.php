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
use Phpro\SoapClient\CodeGenerator\Rules;
use Phpro\SoapClient\CodeGenerator\Assembler;

return Config::create()
    ->setWsdl('http://apitest.jasperwireless.com/ws/schema/Order.wsdl')
    ->setDestination(dirname(__DIR__) . '/src/SoapTypes/Order')
    ->setNamespace('BrightNucleus\JasperClient\SoapTypes\Order')
    ->addSoapOption('features', SOAP_SINGLE_ELEMENT_ARRAYS)
    ->addRule(new Rules\AssembleRule(new Assembler\GetterAssembler()))
    ->addRule(new Rules\TypenameMatchesRule(
        new Rules\AssembleRule(new Assembler\RequestAssembler()),
        '/Request$/'
    ))
    ->addRule(new Rules\TypenameMatchesRule(
        new Rules\AssembleRule(new Assembler\ResultAssembler()),
        '/Response$/'
    ));
