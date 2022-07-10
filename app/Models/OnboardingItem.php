<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OnboardingItem extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = [];

    public function next_item()
    {
        return $this->belongsTo(OnboardingItem::class);
    }
}
