<?php

namespace Batazo\PopupBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface {
    public function getConfigTreeBuilder(): TreeBuilder {
        $treeBuilder = new TreeBuilder('popup_bundle');
        $treeBuilder->getRootNode()
        ->children()
        ->booleanNode('enable')->defaultFalse()->end()
        ->scalarNode('text')->defaultValue('')->end()
        ->end();
        return $treeBuilder;
    }
}