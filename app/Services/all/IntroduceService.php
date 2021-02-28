<?php
namespace App\Services\all;

use App\Model\Introduce;
use DB;
use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Request;

class IntroduceService extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function __construct()
    {

    }

    public function create($request)
    {

    }

    public function edit($urlPost, $request)
    {

    }

    public function delete($urlPost)
    {

    }

    public function listIntroduceHavePaginate($itemPerPage = 0, $limit = 0)
    {
        $query = DB::table('posts')
                ->select(
                    'id_post',
                    'name_post', 'url_post',
                    'thumbnail_post',
                    'date_post',
                    'enable_post'
                    )
                ->where('enable_post', '=', 1);

        if ($itemPerPage > 0)
        {
            $query = $query->orderBy('date_post', 'desc')
                ->paginate($itemPerPage);
        }
        else
        {
            $query = $query->orderBy('date_post', 'desc')
                ->limit($limit)
                ->get();
        }

        return $query;
    }

    public function detailIntroduce($urlIntroduce)
    {
        $query = DB::table('introduce')
            ->select(
                'name_introduce', 'url_introduce',
                'content1_introduce',
                'content2_introduce',
                'thumbnail_introduce',
                'enable_introduce',
                'created_at'
            )
            ->where('enable_introduce', '=', 1)
            ->where('url_introduce', 'like', $urlIntroduce)
            ->orderBy('created_at', 'desc')
            ->first();

        return $query;
    }








}
