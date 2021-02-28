<?php
namespace App\Services\all;

use App\Model\Post;
use DB;
use Illuminate\Support\ServiceProvider;

class ListPostService extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function __construct()
    {

    }

    public function listpost()
    {
        $query = DB::table('posts')
            ->select(
                'id_post',
                'name_post', 'url_post',
                'thumbnail_post',
                'date_post',
                'enable_post',
                )
            ->where('enable_post', '=', 1)
            ->orderBy('date_post', 'desc')
            ->limit(6)
            ->get();

        return $query;
    }

    public function detailpost($urlPost)
    {
        $query = DB::table('posts')
            ->select(
                'name_post', 'url_post',
                'content_post',
                'thumbnail_post',
                'date_post',
                'enable_post',
            )
            ->where('enable_post', '=', 1)
            ->where('url_post', 'like', $urlPost)
            ->orderBy('date_post', 'desc')
            ->first();

        return $query;
    }










}
