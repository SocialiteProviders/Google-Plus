<?php
namespace SocialiteProviders\Google;

use SocialiteProviders\Manager\SocialiteWasCalled;

class GoogleExtendSocialite
{
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('google', __NAMESPACE__.'\Provider');
    }
}
