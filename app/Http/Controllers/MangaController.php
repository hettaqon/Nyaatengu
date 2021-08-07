<?php

namespace App\Http\Controllers;
use Intervention\Image\Facades\Image;
use App\Models\Manga;
use App\Models\GroupPost;
use Illuminate\Http\Request;

class MangaController extends Controller
{
    public function __construct()
    {
        $this->Manga = new Manga();
        $this->GroupPost = new GroupPost();
        $this->middleware('auth');

    }

    public function index()
    {
        $data = [
            'manga' => $this->Manga->allData(),
            'mangaasc' => $this->Manga->allDataASC(),
        ];
        return view ('manga.index',$data);
    }

    public function create()
    {
        return view('manga.addmanga');
    }

    public function store(Manga $manga)
    {
        $data=request()->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'image' => 'required|image',
            'genre' => 'required|max:255',
            'type' => 'required|max:255',
            'author' => 'required|max:255',
            'status' => 'required|in:Ongoing,Completed,Dropped',
            'releases' => 'required|max:255',
            'rating' => 'nullable|max:255',
            'episode' => 'nullable|max:255',
        ]);
        
        $imagePath = request('image')->store('uploads','public');

        $image = Image::make(public_path("storage/{$imagePath}"));
        $image->save();

        auth()->user()->manga()->create([
            'title' => $data['title'],
            'description' => $data['description'],
            'image' => $imagePath,
            'genre' => $data['genre'],
            'type' => $data['type'],
            'author' => $data['author'],
            'status' => $data['status'],
            'releases' => $data['releases'],
            'rating' => $data['rating'],
            'episode' => $data['episode'],

        ]);

        return redirect("/manga/{$manga->id}");
    }

    public function show($id_manga)
    {
        $data = [
            'manga' => $this->Manga->detailData($id_manga),
            'grouppost' => $this->GroupPost->detailData($id_manga),
        ];
        return view ('manga.show',$data);
    }
}
