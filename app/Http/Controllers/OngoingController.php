<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class OngoingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $manga = DB::table('mangas')->where('status','Ongoing')->paginate(5);
        return view ('ongoing.index',['manga'=>$manga]);
    }
}
