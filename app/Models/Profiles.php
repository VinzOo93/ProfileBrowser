<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Profiles extends Model
{

    public function description(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(Descriptions::class);
    }
}
