<?php

declare(strict_types=1);

namespace Firehed\IntfRepro;

/**
 * @property int $subscriptions;
 */
class Demo implements DemoInterface
{
    public function __get(string $name): mixed
    {
    }
}
