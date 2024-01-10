<?php

declare(strict_types=1);

namespace MsgPhp\Domain\Infrastructure\Config;

use Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;

/**
 * @author Roland Franssen <franssen.roland@gmail.com>
 */
final class TreeBuilderHelper
{
    /**
     * @param mixed $treeBuilder
     */
    public static function root(string $name, &$treeBuilder = null): ArrayNodeDefinition
    {
        $treeBuilder = new TreeBuilder($name, 'array', new NodeBuilder());

        /**
         * @psalm-suppress RedundantCondition
         * @psalm-suppress UndefinedMethod
         *
         * @var ArrayNodeDefinition
         */
        return $treeBuilder->getRootNode();
    }
}
