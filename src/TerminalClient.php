<?php
/**
 * Bright Nucleus Jasper Client.
 *
 * SOAP client to interact with the Jasper Wireless Control Center.
 *
 * @package   BrightNucleus\JasperClient
 * @author    Alain Schlesser <alain.schlesser@gmail.com>
 * @license   MIT
 * @link      https://www.brightnucleus.com/
 * @copyright 2017 Alain Schlesser, Bright Nucleus
 */

namespace BrightNucleus\JasperClient;

use BrightNucleus\JasperClient\SoapTypes\NetworkAccessClient\EditNetworkAccessConfigRequest;
use BrightNucleus\JasperClient\SoapTypes\NetworkAccessClient\EditNetworkAccessConfigResponse;
use BrightNucleus\JasperClient\SoapTypes\NetworkAccessClient\GetNetworkAccessConfigRequest;
use BrightNucleus\JasperClient\SoapTypes\NetworkAccessClient\GetNetworkAccessConfigResponse;
use BrightNucleus\JasperClient\SoapTypes\Other\GetAllNetworkAccessConfigsRequest;
use BrightNucleus\JasperClient\SoapTypes\Other\GetAllNetworkAccessConfigsResponse;
use BrightNucleus\JasperClient\SoapTypes\Other\GetNetworkAccessConfigDetailsRequest;
use BrightNucleus\JasperClient\SoapTypes\Other\GetNetworkAccessConfigDetailsResponse;
use BrightNucleus\JasperClient\SoapTypes\TerminalClient\EditTerminalRequest;
use BrightNucleus\JasperClient\SoapTypes\TerminalClient\EditTerminalResponse;
use BrightNucleus\JasperClient\SoapTypes\TerminalClient\GetModifiedTerminalsRequest;
use BrightNucleus\JasperClient\SoapTypes\TerminalClient\GetModifiedTerminalsResponse;
use BrightNucleus\JasperClient\SoapTypes\TerminalClient\GetSessionInfoRequest;
use BrightNucleus\JasperClient\SoapTypes\TerminalClient\GetSessionInfoResponse;
use BrightNucleus\JasperClient\SoapTypes\TerminalClient\GetTerminalDetailsRequest;
use BrightNucleus\JasperClient\SoapTypes\TerminalClient\GetTerminalDetailsResponse;
use BrightNucleus\JasperClient\SoapTypes\TerminalClient\GetTerminalsByMsisdnRequest;
use BrightNucleus\JasperClient\SoapTypes\TerminalClient\GetTerminalsByMsisdnResponse;
use BrightNucleus\JasperClient\SoapTypes\TerminalClient\GetTerminalsBySecureSimIdRequest;
use BrightNucleus\JasperClient\SoapTypes\TerminalClient\GetTerminalsBySecureSimIdResponse;
use Phpro\SoapClient\Exception\SoapException;

/**
 * Class TerminalClient.
 *
 * @since   0.1.0
 *
 * @package BrightNucleus\JasperClient
 * @author  Alain Schlesser <alain.schlesser@gmail.com>
 */
class TerminalClient extends AbstractClient
{
    const WSDL_IDENTIFIER = 'terminal';

    /**
     * Returns a list of SIM IDs for all the devices that have been modified since a given date and time.
     *
     * @param GetModifiedTerminalsRequest $request
     *
     * @return GetModifiedTerminalsResponse
     * @throws SoapException If an error occurs.
     */
    public function getModifiedTerminals(GetModifiedTerminalsRequest $request): GetModifiedTerminalsResponse
    {
        return $this->client->call('GetModifiedTerminals', $request);
    }

    /**
     * Returns a list of SIM IDs corresponding to a given set of device phone numbers (MSISDNs).
     *
     * @param GetTerminalsByMsisdnRequest $request
     *
     * @return GetTerminalsByMsisdnResponse
     * @throws SoapException If an error occurs.
     */
    public function getTerminalsByMsisdn(GetTerminalsByMsisdnRequest $request): GetTerminalsByMsisdnResponse
    {
        return $this->client->call('GetTerminalsByMsisdn', $request);
    }

    /**
     * Returns a list of devices corresponding to a given SecureSIM ID.
     *
     * @param GetTerminalsBySecureSimIdRequest $request
     *
     * @return GetTerminalsBySecureSimIdResponse
     * @throws SoapException If an error occurs.
     */
    public function getTerminalsBySecureSimId(GetTerminalsBySecureSimIdRequest $request
    ): GetTerminalsBySecureSimIdResponse {
        return $this->client->call('GetTerminalsBySecureSimId', $request);
    }

    /**
     * Returns detailed information for each of the devices in a list.
     *
     * @param GetTerminalDetailsRequest $request
     *
     * @return GetTerminalDetailsResponse
     * @throws SoapException If an error occurs.
     */
    public function getTerminalDetails(GetTerminalDetailsRequest $request): GetTerminalDetailsResponse
    {
        return $this->client->call('GetTerminalDetails', $request);
    }

    /**
     * Changes the value of a single attribute for a given device. You can specify that the change take effect
     * immediately or schedule it for some future date.
     *
     * @param EditTerminalRequest $request
     *
     * @return EditTerminalResponse
     * @throws SoapException If an error occurs.
     */
    public function editTerminal(EditTerminalRequest $request): EditTerminalResponse
    {
        return $this->client->call('EditTerminal', $request);
    }

    /**
     * Returns the current session information (IP address and session start time) for one or more devices. If the
     * specified device is not in session, no information is returned.
     *
     * @param GetSessionInfoRequest $request
     *
     * @return GetSessionInfoResponse
     * @throws SoapException If an error occurs.
     */
    public function getSessionInfo(GetSessionInfoRequest $request): GetSessionInfoResponse
    {
        return $this->client->call('GetSessionInfo', $request);
    }

    /**
     * Returns all the available communication plans, also called Network Access Configs.
     *
     * @param GetAllNetworkAccessConfigsRequest $request
     *
     * @return GetAllNetworkAccessConfigsResponse
     * @throws SoapException If an error occurs.
     */
    public function getAllNetworkAccessConfigs(GetAllNetworkAccessConfigsRequest $request
    ): GetAllNetworkAccessConfigsResponse {
        return $this->client->call('GetAllNetworkAccessConfigs', $request);
    }

    /**
     * Returns the communication plan (Network Access Config) details for a given list of communication plan IDs.
     *
     * @param GetNetworkAccessConfigDetailsRequest $request
     *
     * @return GetNetworkAccessConfigDetailsResponse
     * @throws SoapException If an error occurs.
     */
    public function getNetworkAccessConfigDetails(GetNetworkAccessConfigDetailsRequest $request
    ): GetNetworkAccessConfigDetailsResponse {
        return $this->client->call('GetNetworkAccessConfigDetails', $request);
    }

    /**
     * Returns the communication plan ID (Network Access Config ID) for one or more devices.
     *
     * @param GetNetworkAccessConfigRequest $request
     *
     * @return GetNetworkAccessConfigResponse
     * @throws SoapException If an error occurs.
     */
    public function getNetworkAccessConfig(GetNetworkAccessConfigRequest $request): GetNetworkAccessConfigResponse
    {
        return $this->client->call('GetNetworkAccessConfig', $request);
    }

    /**
     * Changes the communication plan (Network Access Config) associated with a given device.
     *
     * @param EditNetworkAccessConfigRequest $request
     *
     * @return EditNetworkAccessConfigResponse
     * @throws SoapException If an error occurs.
     */
    public function editNetworkAccessConfig(EditNetworkAccessConfigRequest $request): EditNetworkAccessConfigResponse
    {
        return $this->client->call('EditNetworkAccessConfig', $request);
    }
}
