<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function additionalServices() {
        return $this->hasMany(AdditionalService::class);
    }
}
