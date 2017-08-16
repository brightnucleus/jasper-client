<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

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

