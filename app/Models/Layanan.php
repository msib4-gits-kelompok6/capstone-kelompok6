<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'bengkel_id'
    ];

    public function bengkel()
    {
        return $this->belongsTo(Bengkel::class);
    }

    public function detail_layanan_booking()
    {
        return $this->hasMany(DetailLayananBooking::class);
    }
}
