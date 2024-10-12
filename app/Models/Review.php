<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $table = "reviews";
    protected $fillable = ['user_id', 'film_id', 'content'];

    public function film()
    {
        return $this->belongsTo(Film::class, 'film_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
