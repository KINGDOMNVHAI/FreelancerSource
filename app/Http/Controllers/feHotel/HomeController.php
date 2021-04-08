<?php
namespace App\Http\Controllers\feHotel;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        $title = "Home";

        // $newest     = new ListNewestPost;
        // $viewNewest = $newest->run(NEWEST_HOME_POSTS, null, true, $this->language);

        return view('feHotel.pages.home', [
            'title'          => $title,
        ]);
    }

    public function about()
    {
        $title = "About us";

        // $newest     = new ListNewestPost;
        // $viewNewest = $newest->run(NEWEST_HOME_POSTS, null, true, $this->language);

        return view('feHotel.pages.about-us', [
            'title'          => $title,
        ]);
    }
}
