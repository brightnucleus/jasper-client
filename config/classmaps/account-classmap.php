<?php

use Phpro\SoapClient\Soap\ClassMap\ClassMapCollection;
use Phpro\SoapClient\Soap\ClassMap\ClassMap;

return new ClassMapCollection([
    new ClassMap('CreateAccountRequest', \BrightNucleus\JasperClient\SoapTypes\AccountClient\CreateAccountRequest::class),
    new ClassMap('CreateAccountResponse', \BrightNucleus\JasperClient\SoapTypes\AccountClient\CreateAccountResponse::class),
    new ClassMap('EditAccountRequest', \BrightNucleus\JasperClient\SoapTypes\AccountClient\EditAccountRequest::class),
    new ClassMap('EditAccountResponse', \BrightNucleus\JasperClient\SoapTypes\AccountClient\EditAccountResponse::class),
    new ClassMap('GetAccountDetailsRequest', \BrightNucleus\JasperClient\SoapTypes\AccountClient\GetAccountDetailsRequest::class),
    new ClassMap('GetAccountDetailsResponse', \BrightNucleus\JasperClient\SoapTypes\AccountClient\GetAccountDetailsResponse::class),
    new ClassMap('GetAccountDetailsTelkomselLBSRequest', \BrightNucleus\JasperClient\SoapTypes\AccountClient\GetAccountDetailsTelkomselLBSRequest::class),
    new ClassMap('GetAccountDetailsTelkomselLBSResponse', \BrightNucleus\JasperClient\SoapTypes\AccountClient\GetAccountDetailsTelkomselLBSResponse::class),
    new ClassMap('GetAccountIdByAcctNameRequest', \BrightNucleus\JasperClient\SoapTypes\AccountClient\GetAccountIdByAcctNameRequest::class),
    new ClassMap('GetAccountIdByAcctNameResponse', \BrightNucleus\JasperClient\SoapTypes\AccountClient\GetAccountIdByAcctNameResponse::class),
    new ClassMap('GetAccountIdByOpAcctIdRequest', \BrightNucleus\JasperClient\SoapTypes\AccountClient\GetAccountIdByOpAcctIdRequest::class),
    new ClassMap('GetAccountIdByOpAcctIdResponse', \BrightNucleus\JasperClient\SoapTypes\AccountClient\GetAccountIdByOpAcctIdResponse::class),
    new ClassMap('GetAccountPeerStatusRequest', \BrightNucleus\JasperClient\SoapTypes\AccountClient\GetAccountPeerStatusRequest::class),
    new ClassMap('GetAccountPeerStatusResponse', \BrightNucleus\JasperClient\SoapTypes\AccountClient\GetAccountPeerStatusResponse::class),
    new ClassMap('GetAccountsRequest', \BrightNucleus\JasperClient\SoapTypes\AccountClient\GetAccountsRequest::class),
    new ClassMap('GetAccountsResponse', \BrightNucleus\JasperClient\SoapTypes\AccountClient\GetAccountsResponse::class),
    new ClassMap('SetAccountPeerStatusRequest', \BrightNucleus\JasperClient\SoapTypes\AccountClient\SetAccountPeerStatusRequest::class),
    new ClassMap('SetAccountPeerStatusResponse', \BrightNucleus\JasperClient\SoapTypes\AccountClient\SetAccountPeerStatusResponse::class),
]);
