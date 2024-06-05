<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Pengiriman;
use App\Models\Transaksi;

class UserController extends Controller
{
    public function mycart()
    {
        return view('user\mycart\mycart');
    }

    public function detail()
    {
        return view('user\product-preview');
    }

    public function checkout()
    {
        return view('user\checkout\checkout');
    }

    public function product()
    {
        return view('user\product\product');
    }

    public function add_order(Request $request)
    {
        $pengiriman = new Pengiriman;

        $pengiriman->tanggal_kirim = $request->datetime;

        $pengiriman->save();

        $transaksi = new Transaksi;

        $transaksi->total_harga = $request->total;

        $transaksi->save();

        toastr()->timeOut(5000)->closeButton()->addSuccess('Terimakasih Telah Membeli!');

        return redirect('/dashboard');
    }
}
