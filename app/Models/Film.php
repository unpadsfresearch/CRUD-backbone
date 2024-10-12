<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;
    protected $table = "films";
    protected $fillable = ['judul', 'ringkasan', 'tahun', 'poster', 'genre_id'];

    /**
     * Get the user that owns the Film
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function genre()
    {
        return $this->belongsTo(Genre::class, 'genre_id');
    }

    public function peran()
    {
    return $this->hasMany(Peran::class, 'film_id');
    }

    public function review()
    {
    return $this->hasMany(Review::class, 'film_id');
    }

}
