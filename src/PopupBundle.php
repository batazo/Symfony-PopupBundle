<?php

namespace Batazo\PopupBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Batazo\PopupBundle\DependencyInjection\PopupExtension;

class PopupBundle extends Bundle
{
    public function getContainerExtension(): ?ExtensionInterface
    {
        return new PopupExtension();
    }
}