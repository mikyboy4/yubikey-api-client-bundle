<?php

namespace Surfnet\YubikeyApiClientBundle\Tests;

use Surfnet\YubikeyApiClientBundle\SurfnetYubikeyApiClientBundle;
use Symfony\Bundle\FrameworkBundle\FrameworkBundle;
use Symfony\Bundle\MonologBundle\MonologBundle;
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\HttpKernel\Kernel;

final class TestKernel extends Kernel
{
    public function registerBundles()
    {
        return [
            new FrameworkBundle(),
            new MonologBundle(),
            new SurfnetYubikeyApiClientBundle(),
        ];
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__ . '/config.yml');
    }

    public function getRootDir()
    {
        return sys_get_temp_dir() . '/surfnet-yubikey-api-client-bundle';
    }

    public function getCacheDir()
    {
        return $this->getRootDir() . '/cache';
    }

    public function getLogDir()
    {
        return $this->getRootDir() . '/logs';
    }
}
