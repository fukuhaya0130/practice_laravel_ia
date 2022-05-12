<?php

namespace App\Models;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Text extends Model
{
    use HasFactory;
    protected static function booted(){
        static::addGlobalScope("is_visible", function(Builder $builder){
            $is_visible = 0;
            $builder->where("is_visible", $is_visible);
        });
    }

    protected $fillable = ['title', 'content', 'email', 'price', 'is_visible'];
}
