<?php

declare(strict_types=1);

/*
 * This file is part of pbwork.
 * 
 * (c) Markus Schenker 2022 <scm@olternativ.ch>
 * @license LGPL-3.0-or-later
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 * @link https://github.com/pnwscm60/contao-pbwork-bundle
 */

namespace Pnwscm60\ContaoPbworkBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    const ROOT_KEY = 'pnwscm60_contao_pbwork';

    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder(self::ROOT_KEY);

        $treeBuilder->getRootNode()
            ->children()
                ->arrayNode('foo')
                    ->addDefaultsIfNotSet()
                    ->children()
                        ->scalarNode('bar')
                            ->cannotBeEmpty()
                            ->defaultValue('***')
                        ->end()
                    ->end()
                ->end() // end foo
            ->end()
        ;

        return $treeBuilder;
    }
}
