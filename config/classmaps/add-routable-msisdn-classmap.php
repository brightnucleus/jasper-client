<?php

use Phpro\SoapClient\Soap\ClassMap\ClassMapCollection;
use Phpro\SoapClient\Soap\ClassMap\ClassMap;

return new ClassMapCollection([
    new ClassMap('AddRoutableMSISDNRequest', \BrightNucleus\JasperClient\SoapTypes\AddRoutableMSISDNClient\AddRoutableMSISDNRequest::class),
    new ClassMap('AddRoutableMSISDNResponse', \BrightNucleus\JasperClient\SoapTypes\AddRoutableMSISDNClient\AddRoutableMSISDNResponse::class),
]);
