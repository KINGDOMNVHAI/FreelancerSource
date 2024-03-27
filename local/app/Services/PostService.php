<?php
namespace App\Services;

use App\Models\Posts;
use DB;
use Illuminate\Support\ServiceProvider;

class PostService extends ServiceProvider
{
    public function __construct()
    {

    }

    public function getListPost($limit, $home)
    {
        $query = Posts::where('enable_post', '=', ENABLE);
        if ($home == true) {
            $query = $query->where('home', ENABLE);
        }
        return $query->latest('posts.date_post')
            ->limit($limit)->get();
    }

    public function getListRandomPost($limit, $home)
    {
        $query = Posts::where('enable_post', '=', ENABLE);
        if ($home == true) {
            $query = $query->where('home', ENABLE);
        }
        return $query->latest('posts.date_post')
            ->limit($limit)->orderBy(DB::raw('RAND()'))->get();
    }

    public function detail($urlPost)
    {
        return Posts::where('enable_post', '=', ENABLE)
            ->where('url_post', $urlPost)
            ->first();
    }

    public function getListPostJoinCategoryPaginate($params)
    {
        $namePost = $params['name_post'];
        $sort = $params['sort'];

        // $query = DB::table('posts')->join('categorypost', 'posts.id_cat_post', '=', 'categorypost.id_cat_post');

        // // Nếu yêu cầu search cột cụ thể
        // if ($fields == null)
        // {
        //     $query = $query->select('posts.*', 'categorypost.*')
        //     ->where('posts.name_vi_post', 'LIKE', "%{$params['name_vi_post']}%");
        // }
        // else
        // {
        //     $query = $query->select($fields)
        //     ->where('posts.name_vi_post', 'LIKE', "%{$params['name_vi_post']}%");
        // }

        // // Nếu search yêu cầu id_cat_post
        // if ($params['id_cat_post'] && is_numeric($params['id_cat_post']))
        // {
        //     $query = $query->where('categorypost.id_cat_post', '=', "{$params['id_cat_post']}");
        // }

        // // Nếu search yêu cầu số năm
        // if ($params['year'] && is_numeric($params['year']))
        // {
        //     $query = $query->whereRaw('YEAR(posts.date_post) = ?', $params['year']);
        // }

        // // Nếu search yêu cầu số tháng
        // if ($params['year'] && is_numeric($params['month']))
        // {
        //     $query = $query->whereRaw('MONTH(posts.date_post) = ?', $params['month']);
        // }

        // Mặc định sắp xếp id giảm dần
        // $query = $query->orderBy('posts.id_post', $sort)->paginate(PAGINATE_POST_INDEX);

        $query = Posts::join('categories', 'posts.id_cat_post', '=', 'categories.id_cat')
            ->select('posts.id_post'
            ,'posts.name_post'
            ,'posts.url_post'
            ,'posts.present_post'
            ,'posts.thumbnail_post'
            ,'posts.date_post'
            // ,'posts.update'

            , 'categories.id_cat'
            , 'categories.name_cat AS name_cat_post'
            , 'categories.enable_cat'
        );

        if ($namePost != null && $namePost != '')
        {
            $query = $query->where('posts.name_post', 'LIKE', "%{$params['name_post']}%")
                ->orWhere('posts.name_en_post', 'LIKE', "%{$params['name_post']}%");
        }
        $sortDefault = 'DESC';
        if ($sort != null && $sort == 'ASC')
        {
            $sortDefault = 'ASC';
        }

        return $query->orderBy('posts.date_post', $sortDefault)->paginate(config('limit.50'));
    }

    /**
     *
     *
     * @return void
     */
    public function update($datas, $request, $uploadPath)
    {
        // File name mặc định không có tên
        $fileName = '';

        if ($request->hasFile('thumbnail'))
        {
            // Thư mục upload
            // $uploadPath = public_path('upload/images/thumbnail');
            $file = $request->file('thumbnail');

            // File name được gắn tên
            $fileName = $file->getClientOriginalName();

            // Đưa file vào thư mục
            $file->move(base_path($uploadPath), $fileName);
        } else {
            $fileName = $request->img;
        }

        // idUpdate là id sẽ nhập vào data
        $idUpdate = $datas['id_post'];

        // Case 1: trường hợp Insert, id null
        // Case 2: trường hợp Update, id có giá trị
        if ($idUpdate == null)
        {
            // $getFinalID =  DB::table('post')
            //     ->select(DB::raw('max(id_post) as id_post'))
            //     ->first();

            // $idUpdate = $getFinalID->id_post;

            $query = posts::create([
                'name_post'       => $datas['name_post'],
                'url_post'        => $datas['url_post'],
                'date_post'       => date('Y-m-d'),
                'present_post'    => $datas['present_post'],
                'content_post'    => $datas['content_post'],
                'thumbnail_post'  => $fileName, // Lấy tên file
                'id_cat_post'     => $datas['id_cat_post'],
                'signature'       => Auth::user()->signature,
                'author'          => Auth::user()->username,
                'enable_post'     => $datas['enable'],
                'views'           => random_int(10,100),
            ]);
        }
        else
        {
            $query = posts::where('id_post', $idUpdate)
            ->update([
                'name_post'       => $datas['name_post'],
                'url_post'        => $datas['url_post'],
                'date_post'       => $datas['date_post'],
                'present_post'    => $datas['present_post'],
                'content_post'    => $datas['content_post'],
                'thumbnail_post'  => $fileName,
                // 'id_cat_post'     => $datas['id_cat_post'],
                'enable_post'     => $datas['enable'],
            ]);
        }

        return $query;
    }
}
