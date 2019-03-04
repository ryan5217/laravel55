<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Events\Event' => [
            'App\Listeners\EventListener',
        ],
//        'SocialiteProviders\Manager\SocialiteWasCalled' => [
//            // add your listeners (aka providers) here
//            'SocialiteProviders\QQ\QqExtendSocialite@handle',
//        ],
        \SocialiteProviders\Manager\SocialiteWasCalled::class => [
            // add your listeners (aka providers) here
            'SocialiteProviders\QQ\QqExtendSocialite@handle',
        ],

        \SocialiteProviders\Manager\SocialiteWasCalled::class => [
            // add your listeners (aka providers) here
            'SocialiteProviders\WeixinWeb\WeixinWebExtendSocialite@handle',
        ],

        \SocialiteProviders\Manager\SocialiteWasCalled::class => [
            // add your listeners (aka providers) here
            'SocialiteProviders\Weixin\WeixinExtendSocialite@handle',
        ],
//        'SocialiteProviders\Manager\SocialiteWasCalled' => [
//            'SocialiteProviders\Weibo\WeiboExtendSocialite@handle',
//        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
