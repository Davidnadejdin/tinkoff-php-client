<?php

namespace Davidnadejdin\TinkoffClient;

use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\Command\Guzzle\GuzzleClient;
use GuzzleHttp\Command\Guzzle\Description;

/**
 * Class Client
 * @package Davidnadejdin\AlfabankClient
 * @method init(array $params)
 * @method finishAuthorize(array $params)
 * @method confirm(array $params)
 * @method cancel(array $params)
 * @method charge(array $params)
 * @method getState(array $params)
 * @method resend(array $params)
 * @method submit3DSAuthorization(array $params)
 * @method sendClosingReceipt(array $params)
 */
class Client extends GuzzleClient
{
    public function __construct(array $config = [])
    {
        parent::__construct(
            new HttpClient(),
            new Description(include realpath(__DIR__ . '/description.php')),
            null,
            null,
            null,
            $config
        );

        $this->setDefaults($config);
    }

    private function setDefaults(array $config)
    {
        if (!isset($config['TerminalKey'])) {
            throw new \InvalidArgumentException(
                'You must provide an TerminalKey.'
            );
        }

        $defaults = [];

        $defaults['TerminalKey'] = $config['TerminalKey'];

        $this->setConfig('defaults', $defaults);
    }
}
