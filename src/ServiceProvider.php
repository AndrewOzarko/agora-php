<?php

namespace meteorTechnology\AgoraSDK;

use Pimple\Container;
use Pimple\ServiceProviderInterface;
use meteorTechnology\AgoraSDK\Auth\SimpleTokenBuilder;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['project']      = function (Agora $agora) {
            return new Project($agora);
        };
        $pimple['usage']        = function (Agora $agora) {
            return new Usage($agora);
        };
        $pimple['kicking_rule'] = function (Agora $agora) {
            return new KickingRule($agora);
        };
        $pimple['token'] = function (Agora $agora) {
            return new SimpleTokenBuilder($agora);
        };
    }
}
