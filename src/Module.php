<?php

namespace Laminas\KeyCloak\Api;

use Laminas\ModuleManager\Feature\ConfigProviderInterface;

final class Module implements ConfigProviderInterface
{
    public function getConfig(): array
    {
        return include __DIR__ . '/../config/module.config.php';
    }
}
