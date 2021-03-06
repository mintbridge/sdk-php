<?php

namespace Tokenio\Http;

use Grpc\Channel;
use Grpc\ChannelCredentials;
use Grpc\Interceptor;
use Tokenio\Http\Interceptor\MetadataInterceptor;
use Tokenio\Http\Interceptor\TimeoutInterceptor;

abstract class RpcChannelFactory
{
    /**
     * Creates a channel that connects to a specific host and port.
     *
     * @param string $host the name or IP address of the host.
     * @param int $port the port
     * @param bool $useSsl
     * @param $timeoutMs
     * @param array $metadata
     * @return mixed
     */
    public static function createChannel($host, $port, $useSsl, $timeoutMs, $metadata = [])
    {
        if ($useSsl) {
            $credentials = ChannelCredentials::createSsl(null);
        } else {
            $credentials = ChannelCredentials::createInsecure();
        }

        $channel = new Channel(
            sprintf('%s:%d', $host, $port),
            array('credentials' => $credentials)
        );

        $interceptors = array(
            new TimeoutInterceptor($timeoutMs),
            new MetadataInterceptor($metadata)
        );

        return Interceptor::intercept($channel, $interceptors);
    }
}
