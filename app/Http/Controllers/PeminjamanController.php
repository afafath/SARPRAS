<?php

namespace App\Http\Controllers;

use auth;
use DB;
use Alert;
use App\Exports\PeminjamanExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
   
    public function index()

    {
        

        return view('peminjaman.view',);
    }

 
}
