<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;
    protected $table = "genres";
    protected $fillable = ['nama'];

    public function film()
    {
        return $this->hasMany(Film::class, 'film_id');
    }
}
