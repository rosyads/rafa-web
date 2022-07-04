<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Name extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function brands(){
        return $this->hasMany(Brand::class);
    }

    public function products(){
        return $this->hasMany(Product::class);
    }

    public function reports(){
        return $this->hasMany(Report::class);
    }
}
