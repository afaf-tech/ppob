<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\Province;
use App\Model\RoleModel;
use App\Model\LogAdmin;
use App\Model\CartModel;
use App\City;
use Carbon\Carbon;


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
