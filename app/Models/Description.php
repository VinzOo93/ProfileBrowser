<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Description extends Model
{

    public function profile(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Profile::class);
    }
}
