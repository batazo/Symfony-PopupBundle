<?php

namespace App;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use App\DependencyInjection\PopupExtension;

class PopupBundle extends Bundle
{
    public function getContainerExtension(): ?ExtensionInterface
    {
        return new PopupExtension();
    }
}