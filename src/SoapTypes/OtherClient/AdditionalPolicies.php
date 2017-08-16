<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

class AdditionalPolicies
{

    /**
     * @var AdditionalPolicyType
     */
    private $additionalPolicy = null;

    /**
     * @return AdditionalPolicyType
     */
    public function getAdditionalPolicy()
    {
        return $this->additionalPolicy;
    }


}

