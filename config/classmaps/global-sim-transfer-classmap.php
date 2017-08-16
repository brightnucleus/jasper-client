<?php

use Phpro\SoapClient\Soap\ClassMap\ClassMapCollection;
use Phpro\SoapClient\Soap\ClassMap\ClassMap;

return new ClassMapCollection([
    new ClassMap('CancelGlobalSimTransferRequest', \BrightNucleus\JasperClient\SoapTypes\GlobalSimTransferClient\CancelGlobalSimTransferRequest::class),
    new ClassMap('CancelGlobalSimTransferResponse', \BrightNucleus\JasperClient\SoapTypes\GlobalSimTransferClient\CancelGlobalSimTransferResponse::class),
    new ClassMap('GetGlobalSimTransferStatusRequest', \BrightNucleus\JasperClient\SoapTypes\GlobalSimTransferClient\GetGlobalSimTransferStatusRequest::class),
    new ClassMap('GetGlobalSimTransferStatusResponse', \BrightNucleus\JasperClient\SoapTypes\GlobalSimTransferClient\GetGlobalSimTransferStatusResponse::class),
    new ClassMap('TransferGlobalSimRequest', \BrightNucleus\JasperClient\SoapTypes\GlobalSimTransferClient\TransferGlobalSimRequest::class),
    new ClassMap('TransferGlobalSimResponse', \BrightNucleus\JasperClient\SoapTypes\GlobalSimTransferClient\TransferGlobalSimResponse::class),
]);
