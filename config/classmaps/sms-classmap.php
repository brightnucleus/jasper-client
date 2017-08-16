<?php

use Phpro\SoapClient\Soap\ClassMap\ClassMapCollection;
use Phpro\SoapClient\Soap\ClassMap\ClassMap;

return new ClassMapCollection([
    new ClassMap('GetModifiedSMSRequest', \BrightNucleus\JasperClient\SoapTypes\SmsClient\GetModifiedSMSRequest::class),
    new ClassMap('GetModifiedSMSResponse', \BrightNucleus\JasperClient\SoapTypes\SmsClient\GetModifiedSMSResponse::class),
    new ClassMap('GetSMSDetailsRequest', \BrightNucleus\JasperClient\SoapTypes\SmsClient\GetSMSDetailsRequest::class),
    new ClassMap('GetSMSDetailsResponse', \BrightNucleus\JasperClient\SoapTypes\SmsClient\GetSMSDetailsResponse::class),
    new ClassMap('SendBulkSMSRequest', \BrightNucleus\JasperClient\SoapTypes\SmsClient\SendBulkSMSRequest::class),
    new ClassMap('SendBulkSMSResponse', \BrightNucleus\JasperClient\SoapTypes\SmsClient\SendBulkSMSResponse::class),
    new ClassMap('SendBulkSMSToMsisdnRequest', \BrightNucleus\JasperClient\SoapTypes\SmsClient\SendBulkSMSToMsisdnRequest::class),
    new ClassMap('SendBulkSMSToMsisdnResponse', \BrightNucleus\JasperClient\SoapTypes\SmsClient\SendBulkSMSToMsisdnResponse::class),
    new ClassMap('SendSMSRequest', \BrightNucleus\JasperClient\SoapTypes\SmsClient\SendSMSRequest::class),
    new ClassMap('SendSMSResponse', \BrightNucleus\JasperClient\SoapTypes\SmsClient\SendSMSResponse::class),
    new ClassMap('SendSMSToMsisdnRequest', \BrightNucleus\JasperClient\SoapTypes\SmsClient\SendSMSToMsisdnRequest::class),
    new ClassMap('SendSMSToMsisdnResponse', \BrightNucleus\JasperClient\SoapTypes\SmsClient\SendSMSToMsisdnResponse::class),
]);
