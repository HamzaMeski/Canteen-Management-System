<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MealMenu extends Model
{
    protected $table = 'meal_menus';
    protected $fillable = ['menu_name', 'description', 'price'];

    public function mealSchedules()
    {
        return $this->hasMany(MealSchedule::class);
    }
}
