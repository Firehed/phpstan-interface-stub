<?php

declare(strict_types=1);

namespace Firehed\IntfRepro;

use Stripe\StripeClientInterface;

class UseStripe
{
    public function __construct(
        private StripeClientInterface $stripe,
        private DemoInterface $demoI,
        private Demo $demo,
        private IOnlyInterface $iOnly,
    ) {
    }

    public function useDemo(): void
    {
        // class has __get, uses @property
        $_ = $this->demo->subscriptions;
    }

    public function useDemoI(): void
    {
        // interface does not have __get(), will not respect @proeprty
        $_ = $this->demoI->subscriptions;
    }

    public function useIOnly(): void
    {
        // interface has __get, uses @property
        $_ = $this->iOnly->subscriptions;
    }

    public function useStripeStubbed(): void
    {
        // Stub DOES have __get, still doesn't use @property!
        $_ = $this->stripe->subscriptions;
    }
}
