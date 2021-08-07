<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CompletedController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $manga = DB::table('mangas')->where('status','Completed')->paginate(5);
        return view ('ongoing.index',['manga'=>$manga]);
    }
}
