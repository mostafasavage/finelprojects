<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'sulg',
        'description',
        'stuts',
        'popuer',
        'meat_title',
        'meat_descript',
        'meat_keywords',
        'image',
        'price',
        'tax',
    ];
    public function prodect()
    {
        return $this->hasMany(Prodectse::class);
    }
}
