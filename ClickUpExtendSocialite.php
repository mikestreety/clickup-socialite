<?php

namespace PerchPeek\ClickUp;

use SocialiteProviders\Manager\SocialiteWasCalled;

class ClickUpExtendSocialite
{
    /**
     * Register the provider.
     *
     * @param \SocialiteProviders\Manager\SocialiteWasCalled $socialiteWasCalled
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('clickup', Provider::class);
    }
}
