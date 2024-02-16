<?php

declare(strict_types=1);

/*
 * This file is part of Time4digitalDylan.
 *
 * (c) Ribeiro de Serra Dylan
 *
 * @license LGPL-3.0-or-later
 */

namespace Contao\Time4digitalDylan\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

class Time4digitalDylanExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container): void
    {
        $loader = new YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yml');
    }
}