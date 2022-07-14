<?php

namespace App\Observers;

use App\Models\OnboardingItem;
use Illuminate\Support\Facades\Storage;

class OnboardingItemObserver
{
    /**
     * Handle the OnboardingItem "created" event.
     *
     * @param  \App\Models\OnboardingItem  $onboardingItem
     * @return void
     */
    public function created(OnboardingItem $onboardingItem)
    {
    }

    /**
     * Handle the OnboardingItem "updated" event.
     *
     * @param  \App\Models\OnboardingItem  $onboardingItem
     * @return void
     */
    public function updated(OnboardingItem $onboardingItem)
    {
        if ($onboardingItem->isDirty('image')) {
            Storage::delete($onboardingItem->getOriginal('image'));
        }
    }

    /**
     * Handle the OnboardingItem "deleted" event.
     *
     * @param  \App\Models\OnboardingItem  $onboardingItem
     * @return void
     */
    public function deleted(OnboardingItem $onboardingItem)
    {
        if($onboardingItem->getAttribute('image')) {
            Storage::delete($onboardingItem->getAttribute('image'));
        };
    }

    /**
     * Handle the OnboardingItem "restored" event.
     *
     * @param  \App\Models\OnboardingItem  $onboardingItem
     * @return void
     */
    public function restored(OnboardingItem $onboardingItem)
    {
        //
    }

    /**
     * Handle the OnboardingItem "force deleted" event.
     *
     * @param  \App\Models\OnboardingItem  $onboardingItem
     * @return void
     */
    public function forceDeleted(OnboardingItem $onboardingItem)
    {
        //
    }
}
