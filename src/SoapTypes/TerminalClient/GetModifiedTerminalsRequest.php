<?php

namespace BrightNucleus\JasperClient\SoapTypes\TerminalClient;

use BrightNucleus\JasperClient\SoapTypes\Enums\SimStateType;
use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class GetModifiedTerminalsRequest extends JasperRequest
{

    /**
     * @var \DateTimeInterface
     */
    private $since = null;

    /**
     * @var string
     */
    private $simState = null;

    /**
     * @var int
     */
    private $pageNumber = null;

    /**
     * @var int
     */
    private $accountId = null;

    /**
     * Instantiate a GetModifiedTerminalsRequest object.
     *
     * @since 0.1.0
     *
     * @param int                     $accountId
     * @param string                  $simState
     * @param \DateTimeInterface|null $since
     * @param int                     $pageNumber
     */
    public function __construct(
        int $accountId,
        $simState = SimStateType::ACTIVATED,
        \DateTimeInterface $since = null,
        int $pageNumber = 1
    ) {
        $this->accountId  = $accountId;
        $this->simState   = $simState;
        $this->since      = $since ?: new \DateTimeImmutable('first day of this month');
        $this->pageNumber = $pageNumber;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getSince()
    {
        return $this->since;
    }

    /**
     * @return SimStateType
     */
    public function getSimState()
    {
        return $this->simState;
    }

    /**
     * @return int
     */
    public function getPageNumber()
    {
        return $this->pageNumber;
    }

    /**
     * @return int
     */
    public function getAccountId()
    {
        return $this->accountId;
    }


}

