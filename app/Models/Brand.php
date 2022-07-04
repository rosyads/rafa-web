<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function name(){
        return $this->belongsTo(Name::class);
    }

    public function types(){
        return $this->hasMany(Type::class);
    }

    public function products(){
        return $this->hasMany(Product::class);
    }

    public function reports(){
        return $this->hasMany(Report::class);
    }
}
