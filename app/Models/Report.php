<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function product(){
        return $this->belongsTo(Name::class);
    }

    public function brand(){
        return $this->belongsTo(Brand::class);
    }

    public function type(){
        return $this->belongsTo(Type::class);
    }

    public function customer(){
        return $this->belongsTo(Customer::class);
    }
}
