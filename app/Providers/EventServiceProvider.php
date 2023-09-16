<?php

namespace App\Providers;

use App\Events\PostUpdatedEvent;
use App\Events\TitleUpdated;
use App\Events\TitleUpdatedEvent;
use App\Listeners\IsTitleUpdatedListener;
use App\Listeners\UpdateIsTitleUpdatedListener;
use App\Listeners\UpdatePostValue;
use App\Listeners\UpdateTitlePost;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        TitleUpdatedEvent::class => [
          IsTitleUpdatedListener::class,
        ],
    ];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
        //
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
