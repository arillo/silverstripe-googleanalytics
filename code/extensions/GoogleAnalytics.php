<?php
namespace Arillo\GoogleAnalytics\Extensions;

use DataExtension;
use Director;

class GoogleAnalytics extends DataExtension
{
    public function getGoogleAnalytics()
    {
        if (
            Director::isLive() &&
            defined('AO_GA_TRACKING_CODE')
        ) {
            return $this->owner->customise([
                'GoogleAnalyticsTrackingCode' => AO_GA_TRACKING_CODE
            ])->renderWith('GoogleAnalytics');
        }
    }

    public function GoogleTagManager($type = 'head')
    {
        if (
            Director::isLive() &&
            defined('AO_GTM_CODE')
        ) {
            return $this->owner->customise([
                'GoogleTagManagerCode' => AO_GTM_CODE,
                'GoogleTagManagerType' => $type,
            ])->renderWith('GoogleTagManager');
        }
    }
}
