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

use BrightNucleus\Config\ConfigFactory;
use BrightNucleus\Config\ConfigInterface;
use BrightNucleus\Config\ConfigTrait;
use BrightNucleus\Config\Exception\FailedToProcessConfigException;
use Phpro\SoapClient\ClientBuilder;
use Phpro\SoapClient\ClientFactory;
use Phpro\SoapClient\Exception\InvalidArgumentException;
use Phpro\SoapClient\Soap\ClassMap\ClassMap;
use Phpro\SoapClient\Soap\ClassMap\ClassMapCollection;
use Psr\Log\LoggerInterface;
use Psr\Log\NullLogger;

/**
 * Class AbstractClient.
 *
 * @since   0.1.0
 *
 * @package BrightNucleus\JasperClient
 * @author  Alain Schlesser <alain.schlesser@gmail.com>
 */
abstract class AbstractClient
{
    use ConfigTrait;

    const KEY_ENVIRONMENT = 'environment';
    const DEFAULT_ENVIRONMENT = 'sandbox';

    /**
     * Constant that defines the WSDL to use.
     * Override in subclasses.
     *
     * @since 0.1.0
     */
    const WSDL_IDENTIFIER = 'none';

    /**
     * Client instance to use.
     *
     * @since 0.1.0
     *
     * @var JasperClient
     */
    protected $client;

    /**
     * Logger instance to use.
     *
     * @since 0.1.0
     *
     * @var LoggerInterface
     */
    protected $logger;

    /**
     * Instantiate an EchoClient object.
     *
     * @since 0.1.0
     *
     * @param ConfigInterface      $config Optional. Config instance to use.
     * @param LoggerInterface|null $logger Optional. Logger interface to use.
     *
     * @throws FailedToProcessConfigException If the Config could not be processed.
     * @throws InvalidArgumentException If the client could not be initialized.
     */
    public function __construct(ConfigInterface $config = null, LoggerInterface $logger = null)
    {
        $this->processConfig($config ?? $this->getDefaultConfig());
        $this->logger = $logger ?? new NullLogger();
        $this->initializeClient();
    }

    /**
     * Initialize the client instance to use.
     *
     * @since 0.1.0
     *
     * @throws InvalidArgumentException If the client could not be built.
     */
    protected function initializeClient()
    {
        $environment        = $this->getEnvironment();
        $wsdl               = $this->getWsdlUri($environment);
        $options            = $this->getSoapOptions($environment);
        $classMapCollection = $this->getClassMapCollection($environment);
        $clientFactory      = new ClientFactory(JasperClient::class);

        $clientBuilder = new ClientBuilder($clientFactory, $wsdl, $options);
        $clientBuilder->withLogger($this->logger);
        foreach ($classMapCollection->toSoapClassMap() as $wsdlType => $phpClassName) {
            $clientBuilder->addClassMap(new ClassMap($wsdlType, $phpClassName));
        }
        $this->client = $clientBuilder->build();
    }

    /**
     * Get the environment to work with.
     *
     * @since 0.1.0
     *
     * @return string Environment identifier.
     */
    protected function getEnvironment(): string
    {
        if (defined(JasperClient::CONSTANT_ENVIRONMENT)) {
            return constant(JasperClient::CONSTANT_ENVIRONMENT);
        }

        if ($env = getenv(JasperClient::CONSTANT_ENVIRONMENT)) {
            return $env;
        }

        if ($this->hasConfigKey(static::KEY_ENVIRONMENT)) {
            return $this->getConfigKey(static::KEY_ENVIRONMENT);
        }

        return static::DEFAULT_ENVIRONMENT;
    }

    /**
     * Get the Soap options for a given environment.
     *
     * @since 0.1.0
     *
     * @param string $environment Environment to get the Soap options for.
     *
     * @return array Array of Soap options.
     */
    protected function getSoapOptions(string $environment): array
    {
        return (array)$this->getConfigKey(
            JasperClient::KEY_ENVIRONMENTS,
            $environment,
            JasperClient::KEY_SOAP_OPTIONS
        );
    }

    /**
     * Get the WSDL URI for a given environment.
     *
     * @since 0.1.0
     *
     * @param string $environment Environment to get the WSDL for.
     *
     * @return string WSDL URI
     */
    protected function getWsdlUri(string $environment): string
    {
        return (string)$this->getConfigKey(
            JasperClient::KEY_ENVIRONMENTS,
            $environment,
            JasperClient::KEY_WSDL_URIS,
            static::WSDL_IDENTIFIER
        );
    }

    /**
     * Get the class map collection for a given environment.
     *
     * @since 0.1.0
     *
     * @param string $environment Environment to get the class map for.
     *
     * @return ClassMapCollection Collection of class mappings.
     */
    protected function getClassMapCollection(string $environment): ClassMapCollection
    {
        $wsdl = static::WSDL_IDENTIFIER;
        return include dirname(__DIR__) . "/config/classmaps/{$wsdl}-classmap.php";
    }

    /**
     * Get the default config for the library.
     *
     * @since 0.1.0
     *
     * @return ConfigInterface Default library config.
     */
    protected function getDefaultConfig()
    {
        $configPath = dirname(__DIR__) . '/config/defaults.php';
        $config     = ConfigFactory::create($configPath);
        return $config->getSubConfig(__NAMESPACE__);
    }

    /**
     * Set the API license key.
     *
     * @since 0.1.0
     *
     * @param string $apiKey API license key.
     */
    public function setApiKey(string $apiKey)
    {
        $this->client->setApiKey($apiKey);
    }

    /**
     * Set the Login username.
     *
     * @since 0.1.0
     *
     * @param string $username Login username to use.
     */
    public function setUsername(string $username)
    {
        $this->client->setUsername($username);
    }

    /**
     * Set the login password.
     *
     * @since 0.1.0
     *
     * @param string $password Login password to use.
     */
    public function setPassword(string $password)
    {
        $this->client->setPassword($password);
    }

    /**
     * Forward methods to the client instance.
     *
     * @since 0.1.0
     *
     * @param string $name      Name of the method that was called.
     * @param array  $arguments Array of arguments.
     */
    public function __call($name, array $arguments)
    {
        $this->client->$name(...$arguments);
    }
}
