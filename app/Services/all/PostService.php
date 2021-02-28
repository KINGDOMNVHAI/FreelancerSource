<?php
namespace App\Services\all;

use App\Model\Post;
use DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

// use Illuminate\Support\Facades\Request;
use Illuminate\Support\ServiceProvider;

class PostService extends ServiceProvider
{
    /**
     * Services/all have all basic SQL of all tables in this project
     *
     * @return void
     */
    public function __construct()
    {

    }

    public function create($request)
    {
        //Kiểm tra input có lựa chọn file nào để upload chưa
        if ($request->hasFile('thumbnail'))
        {
            // Xem tất cả thuộc tính của file
            $input = $request->all();

            $file = $request->file('thumbnail'); // Lấy file từ form
            $input['file'] = $file->getClientOriginalName(); // Tên file
            $file->move(public_path('upload'),$file->getClientOriginalName()); // Di chuyển file đến public/upload
        }

        $query = Post::insert([
            'name_post'     => $request->name,
            'url_post'      => $request->url,
            'content_post'  => $request->content,
            'date_post'     => date("Y-m-d"),
            'thumbnail_post' => $input['file'],  // Lấy tên file,
        ]);

        return $query;
    }

    public function edit($urlPost, $request)
    {
        $query = DB::table('posts')
            ->where('enable_post', '=', 1)
            ->where('url_post', 'like', $urlPost)
            ->update([
                'name_post'     => $request->name,
                'content_post'  => $request->content,
            ]);

        return $query;
    }

    public function delete($urlPost)
    {
        $query = DB::table('posts')
            ->where('url_post', 'like', $urlPost)
            ->update([
                'enable_post'   => 0,
            ]);

        return $query;
    }

    public function listPostHavePaginate($itemPerPage = 0, $limit = 0)
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

    public function detailPost($urlPost)
    {
        $query = DB::table('posts')
            ->select(
                'name_post', 'url_post',
                'content_post',
                'thumbnail_post',
                'date_post',
                'enable_post'
            )
            ->where('enable_post', '=', 1)
            ->where('url_post', 'like', $urlPost)
            ->orderBy('date_post', 'desc')
            ->first();

        return $query;
    }


}
