<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'body'];

    public function Items()
    {
        return $this->hasMany(Item::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
