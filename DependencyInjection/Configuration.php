<?php

namespace Incredible\PiwikBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files.
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/configuration.html}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('incredible_piwik');

        $rootNode
            ->children()
                ->booleanNode('enabled')->defaultValue('%kernel.debug%')->end()
                ->integerNode('site_id')->end()
                ->scalarNode('tracker_url')->end()
                ->arrayNode()
                    ->children()
                        ->booleanNode('enabled')->defaultFalse()->end()
                        ->integerNode('timer')->defaultValue(30)->end()
                    ->end()
                ->end()
            ->end();

        return $treeBuilder;
    }
}
