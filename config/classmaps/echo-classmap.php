<?php

use Phpro\SoapClient\Soap\ClassMap\ClassMapCollection;
use Phpro\SoapClient\Soap\ClassMap\ClassMap;

return new ClassMapCollection([
    new ClassMap('EchoRequest', \BrightNucleus\JasperClient\SoapTypes\EchoClient\EchoRequest::class),
    new ClassMap('EchoResponse', \BrightNucleus\JasperClient\SoapTypes\EchoClient\EchoResponse::class),
]);
