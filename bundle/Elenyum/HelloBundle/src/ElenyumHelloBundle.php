<?php

namespace Elenyum\HelloBundle;

use Elenyum\HelloBundle\DependencyInjection\ElenyumHelloExtension;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

class ElenyumHelloBundle extends AbstractBundle
{
    public function getPath(): string
    {
        return dirname(__DIR__);
    }

    public function getContainerExtension(): ?ExtensionInterface
    {
        return new ElenyumHelloExtension();
    }
}