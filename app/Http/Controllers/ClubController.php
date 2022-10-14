<?php

namespace App\Http\Controllers;


use App\Models\Club;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\DB;

class ClubController extends Controller
{
    public function detail($id)
    {
        $data = Club::find($id);
        return view('detailClub', ['event' => $data]);
    }
}
