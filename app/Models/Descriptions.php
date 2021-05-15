<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Descriptions extends Model
{

    public function profile(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Profiles::class);
    }
}