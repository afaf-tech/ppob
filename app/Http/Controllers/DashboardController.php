<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\LogAdmin;
use Auth;
use DB;


class DashboardController extends Controller
{
    public function __construct()
    {
        date_default_timezone_set('Asia/Jakarta');
    }

    public function index()
    {

        $data['user'] = Auth::guard('web')->user();

        return view('dashboard', $data);
    }



}
