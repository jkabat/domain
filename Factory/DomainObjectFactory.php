<?php

declare(strict_types=1);

namespace MsgPhp\Domain\Factory;

/**
 * @author Roland Franssen <franssen.roland@gmail.com>
 */
interface DomainObjectFactory
{
    /**
     * @template T of object
     *
     * @param class-string<T> $class
     *
     * @return T
     */
    public function create(string $class, array $context = []): object;

    /**
     * @template T of object
     *
     * @param class-string<T> $class
     *
     * @return T
     */
    public function reference(string $class, array $context = []): object;

    /**
     * @param class-string $class
     *
     * @return class-string
     */
    public function getClass(string $class, array $context = []): string;
}
