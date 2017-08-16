<?php

use Phpro\SoapClient\Soap\ClassMap\ClassMapCollection;
use Phpro\SoapClient\Soap\ClassMap\ClassMap;

return new ClassMapCollection([
    new ClassMap('AdvanceShipmentNotificationRequest', \BrightNucleus\JasperClient\SoapTypes\OrderClient\AdvanceShipmentNotificationRequest::class),
    new ClassMap('AdvanceShipmentNotificationResponse', \BrightNucleus\JasperClient\SoapTypes\OrderClient\AdvanceShipmentNotificationResponse::class),
    new ClassMap('GetBulkUpdateStatusRequest', \BrightNucleus\JasperClient\SoapTypes\OrderClient\GetBulkUpdateStatusRequest::class),
    new ClassMap('GetBulkUpdateStatusResponse', \BrightNucleus\JasperClient\SoapTypes\OrderClient\GetBulkUpdateStatusResponse::class),
    new ClassMap('UpdateOrderStatusRequest', \BrightNucleus\JasperClient\SoapTypes\OrderClient\UpdateOrderStatusRequest::class),
    new ClassMap('UpdateOrderStatusResponse', \BrightNucleus\JasperClient\SoapTypes\OrderClient\UpdateOrderStatusResponse::class),
]);
