<?php

namespace App\Models\Discounts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MondayDiscount extends Model
{
    protected $table = 'monday_discounts';

    protected $fillable = [
        'meal_id',
        'category_id',
        'discount',
    ];

    /**
     * Get the meal that the discount applies to.
     */
    public function meal(): BelongsTo
    {
        return $this->belongsTo(MondayDailyMeal::class, 'meal_id');
    }

    /**
     * Get the user category that the discount applies to.
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(UserCategory::class, 'category_id');
    }
}
