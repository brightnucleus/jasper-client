<?php

use Phpro\SoapClient\Soap\ClassMap\ClassMapCollection;
use Phpro\SoapClient\Soap\ClassMap\ClassMap;

return new ClassMapCollection([
    new ClassMap('EditNetworkAccessConfigRequest', \BrightNucleus\JasperClient\SoapTypes\NetworkAccessClient\EditNetworkAccessConfigRequest::class),
    new ClassMap('EditNetworkAccessConfigResponse', \BrightNucleus\JasperClient\SoapTypes\NetworkAccessClient\EditNetworkAccessConfigResponse::class),
    new ClassMap('GetNetworkAccessConfigRequest', \BrightNucleus\JasperClient\SoapTypes\NetworkAccessClient\GetNetworkAccessConfigRequest::class),
    new ClassMap('GetNetworkAccessConfigResponse', \BrightNucleus\JasperClient\SoapTypes\NetworkAccessClient\GetNetworkAccessConfigResponse::class),
]);
