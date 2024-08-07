<?php

namespace JMose\CommandSchedulerBundle;

use JMose\CommandSchedulerBundle\DependencyInjection\JMoseCommandSchedulerExtension;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class JMoseCommandSchedulerBundle extends Bundle
{
    /**
     * {@inheritdoc}
     *
     * @return JMoseCommandSchedulerExtension
     */
    public function getContainerExtension(): ?ExtensionInterface
    {
        $class = $this->getContainerExtensionClass();

        return new $class();
    }

    /**
     * {@inheritdoc}
     */
    protected function getContainerExtensionClass(): string
    {
        return JMoseCommandSchedulerExtension::class;
    }
}
