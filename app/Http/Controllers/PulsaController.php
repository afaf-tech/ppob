<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\LogAdmin;
use Auth;
use DB;


class PulsaController extends Controller
{
    public function __construct()
    {
        date_default_timezone_set('Asia/Jakarta');
    }

    public function index()
    {
        $data['pulsa_nominal'] = DB::table('table_nominal_pulsa')->orderBy('nominal','asc')->get();
        $data['providers'] = DB::table('table_provider')->get();
        $data['user'] = Auth::guard('web')->user();

        return view('pulsa', $data);
    }

    public function post(Request $request){
        // dd($request);
        DB::beginTransaction();
        try {
            $harga_pulsa = DB::table('table_nominal_pulsa')->where('id', $request->nominal)->first()->fixed_price;
            $insertPulsa = [
                "nomor_hp"              => $request->phone_number,
                "id_provider"           => $request->provider,
                "id_nominal"            => $request->nominal,
                "price"                 => $harga_pulsa,
                'created_at'            => date('Y-m-d H:i:s'),
                'updated_at'            => date('Y-m-d H:i:s'),
            ];
            $beliPulsa = DB::table('table_pulsa')->insert($insertPulsa);
            $saldo = Auth::guard('web')->user()->saldo;
            $saldoNow = $saldo - $harga_pulsa;
            $user = DB::table('users')->update([
                'saldo'                 => $saldoNow - $harga_pulsa,
                'updated_at'            => date('Y-m-d H:i:s'),
            ]);

            DB::commit();
            $data['code']    = 200;
            $data['message'] = 'Berhasil Isi Ulang Pulsa ke nomor : '.$request->phone_number.'!';
            return response()->json($data);

            // all good
        } catch (\Exception $e) {
            DB::rollback();
            $data['code']    = 500;
            $data['message'] = 'Maaf Ada yang Error!';
            // var_dump($e);
            return response()->json($data);
        }
    }



}
