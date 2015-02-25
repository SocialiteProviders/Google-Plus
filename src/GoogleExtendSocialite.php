<?php
namespace SocialiteProviders\Google;

use SocialiteProviders\Manager\SocialiteWasCalled;

class GoogleExtendSocialite
{
    /**
     * Execute the provider.
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite(
            'google', __NAMESPACE__.'\Provider'
        );
    }
}
