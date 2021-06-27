<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsViews extends \Eloquent {

    protected $table = 'news_views';

    public static function createViewLog($post) {
            $postsViews= new NewsViews();
            $postsViews->id_post = $post->id;
            $postsViews->slug = $post->slug;
            $postsViews->url = \Request::url();
            $postsViews->session_id = \Request::getSession()->getId();
            $postsViews->ip = \Request::getClientIp();
            $postsViews->agent = \Request::header('User-Agent');
            $postsViews->save();
    }

}
