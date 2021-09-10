<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class MasterController extends Controller
{
    public function classNav() {
        $classnav = Kelas::all();
        return view('master.navbar', compact('classnav'));
    }
}
