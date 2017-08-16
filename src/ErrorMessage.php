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

/**
 * Interface ErrorMessage.
 *
 * @since   0.1.0
 *
 * @package BrightNucleus\JasperClient
 * @author  Alain Schlesser <alain.schlesser@gmail.com>
 */
interface ErrorMessage
{
    const CODE = [
        // Generic Errors.
        '10000'   => 'Wildcard search is too general',
        '10001'   => 'Maximum size exceeded',

        // Terminal related.
        '100000'  => 'Terminal error',
        '100100'  => 'Terminal not found',
        '100200'  => 'Invalid terminal change type',
        '100300'  => 'Invalid edit terminal request',
        '100400'  => 'Invalid terminal(s) specified',
        '100401'  => 'Invalid device ID specified',
        '100500'  => 'Offer not found',
        '100501'  => 'Invalid offer',
        '100510'  => 'Campaign not found',
        '100520'  => 'Invalid rate plan',
        '100101'  => 'Invalid ICCID',

        // Billing related.
        '200000'  => 'Billing error',
        '200100'  => 'Invoice does not exist',
        '200200'  => 'No terminal usage found',

        // Admin related.
        '300000'  => 'Admin error',
        '300100'  => 'Invalid Qcode',
        '300200'  => 'Invalid account name',
        '300201'  => 'Account name not unqiue',
        '300300'  => 'Invalid email',
        '300301'  => 'Email not unqiue',

        // API related.
        '400000'  => 'API error',
        '400100'  => 'Invalid license key. Please use a valid API license key.',
        '400101'  => 'License has exceeded the rate limit for API calls.',
        '400200'  => 'Security validation error. Your username or password is incorrect.',
        '400201'  => 'Access violation error. Please check your login - you may be trying to access a SIM that belongs to a different Account or Service Provider.',
        '400300'  => 'System internal error',
        '400400'  => 'Too many entries',
        '400500'  => 'Invalid iccid',

        // SMS related.
        '500000'  => 'Sms Error',
        '500100'  => 'From Date greater than To Date',
        '500200'  => 'Too many entries',
        '500300'  => 'Sms Message not found',
        '500400'  => 'Message text NULL',
        '500500'  => 'Message text greater than 160 chars',
        '500600'  => 'Send message failure',
        '500700'  => 'Sim not active or is suspended',
        '500800'  => 'Decoding Error',
        '500900'  => 'Decoded message text NULL',

        // Alert related.
        '700000'  => 'Alert Error',
        '700100'  => 'Too many entries',
        '700200'  => 'Alert not found',

        // NAC ID related.
        '800000'  => 'Network Access Config not found',
        '800100'  => 'Invalid edit Network Access Config request',

        // Messaging Related.
        '900100'  => 'No active session',
        '900101'  => 'Protocol not supported',
        '900102'  => 'Invalid port',
        '900103'  => 'Communication failed',
        '900104'  => 'Communication timeout',

        // Account Related.
        '1000100' => 'Account not found',
        '1000400' => 'Too many Accounts',
        '1000500' => 'Service provider not found',
        '1000501' => 'Could not create account',
        '1000502' => 'Internal Error - default trial communication plan not found for service provider',
        '1000503' => 'Internal Error - default trial rate plan not found for service provider',
        '1000504' => 'Account already exists',
        '1000505' => 'Invalid region Id',
        '1000506' => 'Default communication plan not found for service provider',
        '1000507' => 'Operator Account ID is not unique, multiple accounts founds',
        '1000508' => 'Cannot Transfer SIM to this Account',
        '1000509' => 'Cannot Transfer SIM to the same Account',
        '1000510' => 'Cannot Transfer SIM when one of the account is Inventory Account',

        // Edit Terminal Rating related.
        '1100100' => 'Edit Terminl Rating Error',
        '1100200' => 'Term end date greater than term start date',
        '1100300' => 'Renewal Rate Plan is blank',
        '1100400' => 'Renewal Rate Plan is not valid for the terminal',
        '1100500' => 'Renewal mode is not valid',
        '1100600' => 'Access denied. Cannot edit term start and end dates',
        '1100700' => 'Failed to remove Rate Plan from Queue',

        // Add Terminal Renewal related.
        '1110100' => 'Add Terminal Renewal Error',

        // LinePayStatus related.
        '1120100' => 'Edit LinePayStatus error',
        '1120101' => 'Invalid linepaystatus parameter',
        '1120102' => 'Invalid operation for simstatus is Purged',
        '1120104' => 'No terminals associated with Operator Account ID',

        // Event Plans Related.
        '1200100' => 'Invalid Event Name',
        '1200200' => 'Event Instance not found',
        '1200300' => 'Event Instance started already',

        // Connection Manager Related.
        '1300100' => 'Configuration file not found',
        '1300200' => 'Failed to upload diagnostics data',
        '1300300' => 'Invalid sequence number',

        // User Related.
        '1400100' => 'Try a different user name.',
        '1400101' => 'Customer not found',
        '1400102' => 'Role not found',
        '1400103' => 'Could not create user',
        '1400104' => 'Password invalid',
        '1400105' => 'Invalid authentication token',
        '1400106' => 'Not authorized to create this role',
        '1400107' => 'Peered user information must be specified',
        '1400108' => 'Account not peered',
        '1400109' => 'User not found',
        '1400110' => 'Could not delete user',
        '1400111' => 'Could not reset user password',

        // Password Related (part of "User related").
        '1401001' => 'Illegal characters in password',
        '1401002' => 'Password length less than the required minimum',
        '1401003' => 'Password length more than the maximum',
        '1401004' => 'Contains less alphabetic characters than the required minimum',
        '1401005' => 'Contains more alphabetic characters than the maximum',
        '1401006' => 'Contains less numeric characters than the required minimum',
        '1401007' => 'Contains more numeric characters than the maximum',
        '1401008' => 'Contains less special characters than the required minimum',
        '1401009' => 'Contains more special characters than the maximum',
        '1401010' => 'Password matches one of the previous passwords',
        '1401011' => 'Contains less uppercase characters than the required minimum',

        // Jasperwireless Vault Related.
        '1500100' => 'IMSI not found',
        '1500200' => 'Start Date is not before End Date',

        // Rate Plan Related.
        '1600100' => 'Invalid Rate Plan or Not a Wholesale Rate Plan',

        // Comm Plan Related.
        '1700100' => 'Invalid Comm Plan',
        '1700101' => 'Invalid APN',
        '1700102' => 'Invalid IP Address',

        //Global SIM related errors.
        '1800100' => 'Global SIM unknown issues',
        '1800101' => 'Global Sim not found',
        '1800102' => 'Global Partner not found',
        '1800103' => 'Invalid globalSimTransferId in the request',
        '1800104' => 'Invalid transfer request. Primary ICCID hasn\'t been transferred to any partner',
        '1800105' => 'ICCID already has a global transfer pending',
        '1800106' => 'ICCID doesn\'t have any pending Global Transfer request',
        '1800107' => 'Global Alliance not found',
        '1800108' => 'Target operator doesn\'t exist',
        '1800109' => 'Target Global SIM subscription information not found',
        '1800110' => 'Account mapping not defined for Global SIM transfer',
        '1800111' => 'Global SIM is in invalid state for Global SIM transfer',
        '1800112' => 'Target subscription is already in use',
        '1800113' => 'G&D IMSI swap failed for the Global SIM',
        '1800114' => 'Jasper IMSI swap failed for the Global SIM',
        '1800115' => 'Global SIM not live',
        '1800116' => 'Global SIM transfer can\'t be cancelled for the SIM at this stage',
        '1800132' => 'Invalid request, duplicate messageId used',
    ];
}
