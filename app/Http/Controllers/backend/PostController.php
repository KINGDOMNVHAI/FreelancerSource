<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Model\User;
use App\Model\Post;
use App\Services\all\ListPostService;
use App\Services\backend\PostService;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('login');
    }

    public function listpost()
    {
        if (Auth::check())
        {
            $username = Auth::user()->username;

            // Public Services
            $listpost     = new ListPostService;
            $viewListPost = $listpost->listpost();

            return view('backend.pages.list-post', [
                'title'     => TITLE_FRONTEND_INDEX,

                'username'  => $username,
                'listpost'  => $viewListPost,
            ]);
        }
        else {
            return redirect('login');
        }
    }

    public function createpost(Request $request)
    {
        if (Auth::check())
        {
            $username = Auth::user()->username;

            // Luôn luôn trong trạng thái lấy data từ các input trong form dù có search hay không
            $request = Request::capture();

            if ($request->isMethod('POST'))
            {
                $create = new PostService;
                $viewData = $create->create($request);

                return redirect('list-post');
            }
            return view('backend.pages.create-post', [
                'title'     => TITLE_FRONTEND_INDEX,
                'username'  => $username,
            ]);
        }
        else {
            return redirect('login');
        }
    }

    public function update($urlPost)
    {
        if (Auth::check())
        {
            $username = Auth::user()->username;

            // Get title from parent class
            $title = "List Post";

            $post = new ListPostService;
            $viewPost = $post->detailpost($urlPost);

            return view('backend.pages.edit-post', [
                'title' => $title,
                'post'  => $viewPost,
                'username'  => $username,
            ]);
        }
        else {
            return redirect()->route('login');
        }
    }

    public function edit($urlPost, Request $request)
    {
        $post = new PostService;
        $viewPost = $post->editpost($urlPost, $request);

        return redirect('list-post');
    }

    public function delete($urlPost)
    {
        if (Auth::check())
        {
            $post = new PostService;
            $viewPost = $post->deletepost($urlPost);

            return redirect('list-post');
        }
        else {
            return redirect()->route('login');
        }
    }
}
