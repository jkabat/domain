<?php

declare(strict_types=1);

namespace MsgPhp\Domain;

/**
 * @author Roland Franssen <franssen.roland@gmail.com>
 */
interface DomainIdInterface
{
    /**
     * @param mixed $value
     */
    public static function fromValue($value): self;

    public function isEmpty(): bool;

    public function equals(self $id): bool;

    public function toString(): string;

    public function __toString(): string;
}
