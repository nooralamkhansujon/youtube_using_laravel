<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Channel;
use App\View;
use App\Like;
use App\Dislike;

class Video extends Model
{
    protected $guarded=[];

    public function channel()
    {
        return $this->belongsTo(Channel::class,'channel_id','id');
    }

    public function views()
    {
        return $this->hasMany(View::class,'video_id','id');
    }

    public function likes()
    {
        return $this->morphToMany(Like::class,'likeable');
    }


    public function dislikes()
    {
        return $this->morphToMany(Dislike::class,'dislikeable');
    }
}
