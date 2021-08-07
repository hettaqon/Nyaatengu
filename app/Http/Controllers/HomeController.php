<?php

namespace App\Http\Controllers;
use App\Models\Manga;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->Manga = new Manga();
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = [
            'manga' => $this->Manga->allDatax(),
            'mangaong' => $this->Manga->ongoing(),
            'mangacom' => $this->Manga->completed(),
        ];
        return view ('home',$data);
    }
}
