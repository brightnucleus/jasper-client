<?php

use Phpro\SoapClient\Soap\ClassMap\ClassMapCollection;
use Phpro\SoapClient\Soap\ClassMap\ClassMap;

return new ClassMapCollection([
    new ClassMap('GetInvoiceRequest', \BrightNucleus\JasperClient\SoapTypes\BillingClient\GetInvoiceRequest::class),
    new ClassMap('GetInvoiceResponse', \BrightNucleus\JasperClient\SoapTypes\BillingClient\GetInvoiceResponse::class),
    new ClassMap('GetTerminalUsageDataDetailsRequest', \BrightNucleus\JasperClient\SoapTypes\BillingClient\GetTerminalUsageDataDetailsRequest::class),
    new ClassMap('GetTerminalUsageDataDetailsResponse', \BrightNucleus\JasperClient\SoapTypes\BillingClient\GetTerminalUsageDataDetailsResponse::class),
    new ClassMap('GetTerminalUsageRequest', \BrightNucleus\JasperClient\SoapTypes\BillingClient\GetTerminalUsageRequest::class),
    new ClassMap('GetTerminalUsageResponse', \BrightNucleus\JasperClient\SoapTypes\BillingClient\GetTerminalUsageResponse::class),
    new ClassMap('GetTerminalUsageSmsDetailsRequest', \BrightNucleus\JasperClient\SoapTypes\BillingClient\GetTerminalUsageSmsDetailsRequest::class),
    new ClassMap('GetTerminalUsageSmsDetailsResponse', \BrightNucleus\JasperClient\SoapTypes\BillingClient\GetTerminalUsageSmsDetailsResponse::class),
    new ClassMap('GetTerminalUsageVoiceDetailsRequest', \BrightNucleus\JasperClient\SoapTypes\BillingClient\GetTerminalUsageVoiceDetailsRequest::class),
    new ClassMap('GetTerminalUsageVoiceDetailsResponse', \BrightNucleus\JasperClient\SoapTypes\BillingClient\GetTerminalUsageVoiceDetailsResponse::class),
]);
