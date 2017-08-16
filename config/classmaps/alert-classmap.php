<?php

use Phpro\SoapClient\Soap\ClassMap\ClassMapCollection;
use Phpro\SoapClient\Soap\ClassMap\ClassMap;

return new ClassMapCollection([
    new ClassMap('GetAlertDetailsRequest', \BrightNucleus\JasperClient\SoapTypes\AlertClient\GetAlertDetailsRequest::class),
    new ClassMap('GetAlertDetailsResponse', \BrightNucleus\JasperClient\SoapTypes\AlertClient\GetAlertDetailsResponse::class),
    new ClassMap('GetAlertsRequest', \BrightNucleus\JasperClient\SoapTypes\AlertClient\GetAlertsRequest::class),
    new ClassMap('GetAlertsResponse', \BrightNucleus\JasperClient\SoapTypes\AlertClient\GetAlertsResponse::class),
]);
