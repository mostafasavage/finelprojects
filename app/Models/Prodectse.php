<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodectse extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'orgin_price',
        'selling_price',
        'description',
        'small_description',
        'sulg',
        'meat_title',
        'meat_kywords',
        'meat_description',
        'tax',
        'qty',
        'status',
        'trending',
        'cat_id',
        'image',
    ];
    public function category()
    {
        return $this->belongsTo(Category::class , 'cat_id' ,'id');
    }
}
