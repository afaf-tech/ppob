<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\LogAdmin;
use Auth;
use DB;


class PlnController extends Controller
{
    public function __construct()
    {
        date_default_timezone_set('Asia/Jakarta');
    }

    public function index()
    {
        $data['last_transaction'] = DB::table('table_pln as pl')
            ->leftJoin('table_pln_customer as cs', 'cs.id', '=', 'pl.id_customer')
            ->leftJoin('table_nominal_pln as np', 'np.id', '=', 'pl.id_paket_pln')
            ->select('pl.id', 'np.paket_pln', 'pl.price','cs.nama', 'cs.batas_daya', 'cs.id_pelanggan')
            ->orderBy('pl.created_at','desc')
            ->limit(3)
            ->get();
        $data['paket_pln'] = DB::table('table_nominal_pln')->get();
        $data['customers'] = DB::table('table_pln_customer')->get();
        $data['user'] = Auth::guard('web')->user();

        return view('pln', $data);
    }

    public function post(Request $request){
        // dd($request);
        DB::beginTransaction();
        try {
            $harga_pulsa = DB::table('table_nominal_pln')->where('id', $request->paket)->first()->fixed_price;
            $insertPulsa = [
                "id_customer"              => $request->customer,
                "id_paket_pln"              => $request->paket,
                "informasi"           => $request->informasi,
                "price"                 => $harga_pulsa,
                'created_at'            => date('Y-m-d H:i:s'),
                'updated_at'            => date('Y-m-d H:i:s'),
            ];
            $beliPulsa = DB::table('table_pln')->insert($insertPulsa);
            $saldo = Auth::guard('web')->user()->saldo;
            $saldoNow = $saldo - $harga_pulsa;
            $user = DB::table('users')->update([
                'saldo'                 => $saldoNow,
                'updated_at'            => date('Y-m-d H:i:s'),
            ]);

            DB::commit();
            $data['code']    = 200;
            $data['message'] = 'Berhasil Isi Membeli Paket!';
            return response()->json($data);

        } catch (\Exception $e) {
            DB::rollback();
            $data['code']    = 500;
            $data['message'] = 'Maaf Ada yang Error!';
            // var_dump($e);
            return response()->json($e);
        }
    }

    public function customer()
    {
        // $data['last_transaction'] = DB::table('table_pln as pl')
        //     ->leftJoin('table_pln_customer as cs', 'cs.id', '=', 'pl.id_customer')
        //     ->leftJoin('table_nominal_pln as np', 'np.id', '=', 'pl.id_paket_pln')
        //     ->select('pl.id', 'np.paket_pln', 'pl.price','cs.nama', 'cs.batas_daya', 'cs.id_pelanggan')
        //     ->orderBy('pl.created_at','desc')
        //     ->limit(3)
        //     ->get();
        // $data['paket_pln'] = DB::table('table_nominal_pln')->get();
        // $data['customers'] = DB::table('table_pln_customer')->get();
        $data['user'] = Auth::guard('web')->user();

        return view('customer', $data);
    }




}
