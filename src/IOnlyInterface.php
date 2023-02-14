<?php

declare(strict_types=1);

namespace Firehed\IntfRepro;

/**
 * @property int $subscriptions;
 */
interface IOnlyInterface
{
    public function __get(string $name): mixed;
}
