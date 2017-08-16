<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class ChangeVoicemailPasswordRequest extends JasperRequest
{

    /**
     * @var SubscriberVoicemailKey
     */
    private $voicemailKey = null;

    /**
     * @var ChangeVoiceMailPasswordType
     */
    private $changeVoicemailPasswordDetails = null;

    /**
     * @var successMessageType
     */
    private $successSmsMsg = null;

    /**
     * @var successEmailMessageType
     */
    private $successEmailMsg = null;

    /**
     * @return SubscriberVoicemailKey
     */
    public function getVoicemailKey()
    {
        return $this->voicemailKey;
    }

    /**
     * @return ChangeVoiceMailPasswordType
     */
    public function getChangeVoicemailPasswordDetails()
    {
        return $this->changeVoicemailPasswordDetails;
    }

    /**
     * @return successMessageType
     */
    public function getSuccessSmsMsg()
    {
        return $this->successSmsMsg;
    }

    /**
     * @return successEmailMessageType
     */
    public function getSuccessEmailMsg()
    {
        return $this->successEmailMsg;
    }


}

