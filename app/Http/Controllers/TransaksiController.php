<?php

namespace App\Http\Controllers;

use App\Models\Bengkel;
use App\Models\Booking;
use App\Models\User;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function transaksi()
    {
        $transaksi = Booking::with(['kendaraan', 'user', 'bengkel', 'layanans', 'detail_layanan_bookings'])
            ->paginate(4);
        // dd($transaksi);
        return view('mitra/bengkel/transaksi', ['transaksi' => $transaksi]);
    }

    public function edittransaksi($id)
    {
        $transaksi['bookings'] = Booking::with(['kendaraan', 'user', 'bengkel', 'layanans', 'detail_layanan_bookings'])
            ->findOrFail($id);

        //create data (add)
        return view(
            'mitra/bengkel/edittransaksi',
            $transaksi
        );
    }

    public function updatetransaksi(Request $request, $id)
    {
        $transaksi['bookings'] = Booking::with(['kendaraan', 'user', 'bengkel', 'layanans', 'detail_layanan_bookings'])
            ->findOrFail($id);

        $validated = $request->validate([
            'status' => 'required'
        ]);

        Booking::where('id', $id)->update([
            'status' => $validated['status']
        ]);

        return redirect()->back()->with('success', 'Status Berhasil Diubah!');
    }
}
