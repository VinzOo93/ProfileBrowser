<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * Class Profiles
 *
 * Post
 * @mixin  Builder
 */
class Profiles extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'photo'];



}
