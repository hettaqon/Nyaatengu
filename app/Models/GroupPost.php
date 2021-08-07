<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class GroupPost extends Model
{
    use HasFactory;
    protected $table = 'group_posts';
    protected $fillable = [
        'title',
        'chapter',
        'image',
        'user_id',
        'group_id',
    ];

    public function group()
    {
        return $this->belongsTo(Group::class, 'group_id');
    }

    public function allData()
    {
    return DB::table('group_posts')->get();
    }

    public function detailData($id_post)
    {
       return DB::table('group_posts')->where('title',$id_post)->orderBy('chapter','ASC')->get();
    }

    
}
