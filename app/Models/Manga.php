<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Manga extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'image',
        'genre',
        'type',
        'author',
        'status',
        'releases',
        'rating',
        'episode',
    ];
    public function posts()
    {
        return $this->hasMany(GroupPost::class)->orderBy('created_at','DESC');
    }

    public function group()
    {
        return $this->belongsTo(Group::class, 'group_id');
    }

    public function allData()
    {
    return DB::table('mangas')->get();
    }
    public function allDatax()
    {
    return DB::table('mangas')->orderBy('created_at','DESC')->get();
    }

    public function allDataASC()
    {
    return DB::table('mangas')->orderBy('title','ASC')->get();
    }


    public function detailData($id_manga)
    {
       return DB::table('mangas')->where('id',$id_manga)->first();
    }

    public function ongoing()
    {
       return DB::table('mangas')->where('status','Ongoing')->orderBy('created_at','DESC')->get();
    }

    public function completed()
    {
       return DB::table('mangas')->where('status','Completed')->orderBy('created_at','DESC')->get();
    }
}
