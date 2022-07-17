<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\OnboardingItemResource;
use App\Models\OnboardingItem;
use Illuminate\Http\Request;

class OnboardingItemController extends Controller
{
    public function __invoke()
    {
        return OnboardingItemResource::collection(OnboardingItem::all());
    }
}
