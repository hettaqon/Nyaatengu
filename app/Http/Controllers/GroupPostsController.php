<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\GroupPost;
use App\Models\Manga;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;


class GroupPostsController extends Controller
{
    public function __construct()
    {
        $this->groupPost = new GroupPost();
        $this->middleware('auth');
    }

    public function index()
    {
        return redirect ('/manga');
    }
    public function create()
    {
        $manga = Manga::pluck('title','id');

        return view('groups.createpost',[
            'manga'=>$manga,
            ]);
    }
    public function store(Request $request)
    {
        $destinationPath = 'storage/chapterimg';
        $image = array();
        
        if($files=$request->file('image')) {
            
        foreach($files as $file) {
            
            $filename = $file->getClientOriginalName();
            $file->move($destinationPath, $filename);
            $image[] = $filename;
          }
        }
        //implode images with pipe symbol
        $allImages = implode("|",$image);
        
        $grouppost = new GroupPost;
        
        $grouppost->title = $request->title;
        $grouppost->chapter = $request->chapter;
        $grouppost->image = $allImages;
        
        $grouppost->save();
        
         return redirect("/chapter/{$grouppost->id}");

        }     

    /**
     * Updates Post.
     *
     * @param int   $postId
     * @param array $data
     *
     * @return GroupPost
     */
    public function updatePost($postId, $data)
    {
        $this->where('id', $postId)->update($data);

        return $this;
    }

    public function show($id_post)
    {
        $grouppost= GroupPost::find($id_post)->get();
      return view('chapters.show', ['grouppost'=>$grouppost]);
    }
}
