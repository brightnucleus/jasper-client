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

use BrightNucleus\JasperClient\SoapTypes\BillingClient\GetInvoiceRequest;
use BrightNucleus\JasperClient\SoapTypes\BillingClient\GetInvoiceResponse;
use BrightNucleus\JasperClient\SoapTypes\BillingClient\GetTerminalUsageDataDetailsRequest;
use BrightNucleus\JasperClient\SoapTypes\BillingClient\GetTerminalUsageDataDetailsResponse;
use BrightNucleus\JasperClient\SoapTypes\BillingClient\GetTerminalUsageRequest;
use BrightNucleus\JasperClient\SoapTypes\BillingClient\GetTerminalUsageResponse;
use BrightNucleus\JasperClient\SoapTypes\BillingClient\GetTerminalUsageSmsDetailsRequest;
use BrightNucleus\JasperClient\SoapTypes\BillingClient\GetTerminalUsageSmsDetailsResponse;
use BrightNucleus\JasperClient\SoapTypes\BillingClient\GetTerminalUsageVoiceDetailsRequest;
use BrightNucleus\JasperClient\SoapTypes\BillingClient\GetTerminalUsageVoiceDetailsResponse;
use Phpro\SoapClient\Exception\SoapException;

/**
 * Class BillingClient.
 *
 * @since   0.1.0
 *
 * @package BrightNucleus\JasperClient
 * @author  Alain Schlesser <alain.schlesser@gmail.com>
 */
class BillingClient extends AbstractClient
{
    const WSDL_IDENTIFIER = 'billing';

    /**
     * Returns invoice data for a given account and billing cycle. This data includes the Details information that
     * appears at the top of the Billing > Invoices > Invoice Details page, but not the information that appears in the
     * tabs across the bottom of the page.
     *
     * @param GetInvoiceRequest $request
     *
     * @return GetInvoiceResponse
     * @throws SoapException If an error occurs.
     */
    public function getInvoice(GetInvoiceRequest $request): GetInvoiceResponse
    {
        return $this->client->call('GetInvoice', $request);
    }

    /**
     * Returns information about all the data sessions that occurred during a particular billing cycle for a given
     * device.
     *
     * @param GetTerminalUsageDataDetailsRequest $request
     *
     * @return GetTerminalUsageDataDetailsResponse
     * @throws SoapException If an error occurs.
     */
    public function getTerminalUsageDataDetails(GetTerminalUsageDataDetailsRequest $request
    ): GetTerminalUsageDataDetailsResponse {
        return $this->client->call('GetTerminalUsageDataDetails', $request);
    }

    /**
     * Returns the data usage amount for a device during a particular billing cycle. To access the device usage for the
     * current month, use GetTerminalDetails and examine the MonthToDateUsage fields.
     *
     * @param GetTerminalUsageRequest $request
     *
     * @return GetTerminalUsageResponse
     * @throws SoapException If an error occurs.
     */
    public function getTerminalUsage(GetTerminalUsageRequest $request): GetTerminalUsageResponse
    {
        return $this->client->call('GetTerminalUsage', $request);
    }

    /**
     * Returns information about all the messages sent or received by a device during a particular billing cycle.
     *
     * @param GetTerminalUsageSmsDetailsRequest $request
     *
     * @return GetTerminalUsageSmsDetailsResponse
     * @throws SoapException If an error occurs.
     */
    public function getTerminalUsageSmsDetails(GetTerminalUsageSmsDetailsRequest $request
    ): GetTerminalUsageSmsDetailsResponse {
        return $this->client->call('GetTerminalUsageSmsDetails', $request);
    }

    /**
     * Returns information about all the voice calls received or placed by a device during a particular billing cycle.
     *
     * @param GetTerminalUsageVoiceDetailsRequest $request
     *
     * @return GetTerminalUsageVoiceDetailsResponse
     * @throws SoapException If an error occurs.
     */
    public function getTerminalUsageVoiceDetails(GetTerminalUsageVoiceDetailsRequest $request
    ): GetTerminalUsageVoiceDetailsResponse {
        return $this->client->call('GetTerminalUsageVoiceDetails', $request);
    }
}
