<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'image',
        'downloads',
        'rate',
        'year',
        'link',
    ];


    public function user() {
        return $this -> belongsTo(User::class);
    }
}
