<?php

namespace App\Http\Controllers;

use App\Models\PemilikBengkel;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(Request $request)
    {

        return view('admin/app');
    }

    public function listuser(Request $request)
    {
        $data['users'] = User::all();
        return view('admin/listuser', $data);
    }

    public function destroyuser($id)
    {
        User::destroy($id);
        return redirect(route('showlistuser'));
    }

    public function listowner(Request $request)
    {
        $data['pemilik_bengkel'] = PemilikBengkel::all();
        return view('admin/listowner', $data);
    }

    public function destroyowner($id)
    {
        PemilikBengkel::destroy($id);
        return redirect(route('showlistowner'));
    }
}
