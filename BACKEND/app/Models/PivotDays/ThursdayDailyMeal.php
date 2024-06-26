<?php

namespace App\Models\PivotDays;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThursdayDailyMeal extends Model
{
    use HasFactory;
    protected $table = 'thursday_daily_meal';
    public $incrementing = true;

    protected $fillable = [
        'daily_meal_id',
        'week_schedule_id',
        'start_time',
        'end_time',
        'price'
    ];
}
