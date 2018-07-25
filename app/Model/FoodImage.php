<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class FoodImage extends Model
{
    protected $table = 'food_images';
    protected $fillable = [
        'food_id',
        'link',
    ];
    public function food()
    {
        return $this->belongsTo('App\Model\Food');
    }
}
