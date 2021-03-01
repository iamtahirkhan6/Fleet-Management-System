<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use App\Domain\Consignee\Models\Consignee;
use App\Domain\Consignee\Observers\ConsigneeObserver;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
        Consignee::observe(ConsigneeObserver::class);
    }
}
