<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailLayananBooking extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_layanan',
        'id_booking',
        'catatan',
        'harga_tambahan',
    ];

    public function layanans()
    {
        return $this->belongsTo(Layanan::class);
    }

    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }
}
