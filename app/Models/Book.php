<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected  $primaryKey = '_id';
    protected $fillable = ['_id', 'title', 'description'];
    protected $collection = 'books';

}
