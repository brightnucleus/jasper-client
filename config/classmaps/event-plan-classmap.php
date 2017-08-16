<?php

use Phpro\SoapClient\Soap\ClassMap\ClassMapCollection;
use Phpro\SoapClient\Soap\ClassMap\ClassMap;

return new ClassMapCollection([
    new ClassMap('ActivateTerminalEventRequest', \BrightNucleus\JasperClient\SoapTypes\EventPlanClient\ActivateTerminalEventRequest::class),
    new ClassMap('ActivateTerminalEventResponse', \BrightNucleus\JasperClient\SoapTypes\EventPlanClient\ActivateTerminalEventResponse::class),
    new ClassMap('DeleteTerminalEventRequest', \BrightNucleus\JasperClient\SoapTypes\EventPlanClient\DeleteTerminalEventRequest::class),
    new ClassMap('DeleteTerminalEventResponse', \BrightNucleus\JasperClient\SoapTypes\EventPlanClient\DeleteTerminalEventResponse::class),
    new ClassMap('GetAvailableEventsRequest', \BrightNucleus\JasperClient\SoapTypes\EventPlanClient\GetAvailableEventsRequest::class),
    new ClassMap('GetAvailableEventsResponse', \BrightNucleus\JasperClient\SoapTypes\EventPlanClient\GetAvailableEventsResponse::class),
    new ClassMap('GetTerminalEventsRequest', \BrightNucleus\JasperClient\SoapTypes\EventPlanClient\GetTerminalEventsRequest::class),
    new ClassMap('GetTerminalEventsResponse', \BrightNucleus\JasperClient\SoapTypes\EventPlanClient\GetTerminalEventsResponse::class),
]);
