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

use Phpro\SoapClient\Exception\SoapException;

/**
 * Class DebuggingSoapException.
 *
 * @since   0.1.0
 *
 * @package BrightNucleus\JasperClient
 * @author  Alain Schlesser <alain.schlesser@gmail.com>
 */
class DebuggingSoapException extends SoapException
{
    /**
     * Debugging output.
     *
     * @since 0.1.0
     *
     * @var array
     */
    protected $debugOutput;

    /**
     * Add debugging output to the exception.
     *
     * @since 0.1.0
     *
     * @param array $debugOutput Array of debugging output.
     */
    public function addDebugOutput($debugOutput)
    {
        $this->debugOutput = (array)$debugOutput;
    }

    /**
     * Get debugging output.
     *
     * @since 0.1.0
     *
     * @return array
     */
    public function getDebugOutput()
    {
        return $this->debugOutput;
    }
}
