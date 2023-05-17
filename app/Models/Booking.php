<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_bengkel',
        'id_user',
        'id_kendaraan',
        'waktu_booking',
        'status',
        'tipe_booking'

    ];

    public function bengkel()
    {
        return $this->belongsTo(Bengkel::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function kendaraan()
    {
        return $this->belongsTo(Kendaraan::class);
    }

    public function detail_layanan_booking()
    {
        return $this->hasMany(DetailLayananBooking::class);
    }
}
