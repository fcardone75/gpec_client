<?php

namespace Bni\Gpec\Gpec;

use Http\Client\Common\Plugin\HeaderAppendPlugin;
use Http\Client\Common\Plugin\HeaderSetPlugin;
use Http\Client\Common\PluginClient;
use Http\Discovery\Psr18ClientDiscovery;
use Phpro\SoapClient\Caller\EngineCaller;
use Phpro\SoapClient\Caller\EventDispatchingCaller;
use Phpro\SoapClient\Soap\DefaultEngineFactory;
use Ramsey\Uuid\Uuid;
use Soap\Engine\SimpleEngine;
use Soap\ExtSoapEngine\ExtSoapDriver;
use Soap\ExtSoapEngine\ExtSoapOptions;
use Soap\Psr18Transport\Psr18Transport;
use Symfony\Component\EventDispatcher\EventDispatcher;


class CustomGpecFactory
{
    public static function getFactory($wsdl)
    {
        $rsmHostAlias = $_ENV[EnvUtility::BNI_GPEC_RSM_HOST_ALIAS];
        $rsmCaller = $_ENV[EnvUtility::BNI_GPEC_RSM_CALLER];
        $endPoint = $_ENV[EnvUtility::BNI_GPEC_WSDL_ENDPOINT];
        // Custom HTTP headers
        $httpHeaders = [
            'RSMHostAlias' => $rsmHostAlias,
            'RSMCaller' => $rsmCaller,
            'Accept' => '*/*',
        ];

        // Use a Client Psr18
        $clientInterface = Psr18ClientDiscovery::find();
        $pluginClient = new PluginClient($clientInterface,
            [
                new HeaderAppendPlugin($httpHeaders),
            ]);

        // Create a transport with custom headers
        $transport = Psr18Transport::createForClient($pluginClient);

        $extSoapOptions = ExtSoapOptions::defaults($wsdl, [
            'location' => $endPoint,
            'uri' => $wsdl,
            'stream_context' => stream_context_create([
                'http' => [
                    'header' => implode("\r\n", array_map(
                        fn($name, $value) => "$name: $value",
                        array_keys($httpHeaders),
                        $httpHeaders
                    )),
                ],
            ]),
        ]);

        $soapDriver = ExtSoapDriver::createFromOptions($extSoapOptions);

        $engine = new SimpleEngine(
            $soapDriver,
            $transport,
        );

        $eventDispatcher = new EventDispatcher();
        $caller = new EventDispatchingCaller(new EngineCaller($engine), $eventDispatcher);
        return new SoapClient($caller);

    }
}
