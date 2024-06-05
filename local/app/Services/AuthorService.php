<?php
namespace App\Services;

use Illuminate\Support\ServiceProvider;
use App\Models\Categories;
use App\Models\Authors;
use App\Models\ProductCategory;
use App\Models\Products;
use App\Ultis\StringUltis;
use DB;

class AuthorService extends ServiceProvider
{
    public function __construct()
    {

    }

    public function listAuthor($paginate, $enable)
    {
        $query = Authors::where('enable_author', '=', $enable);

        if ($paginate == true) {
            return $query->paginate(LIMIT_12);
        }
        return $query->get();
    }

}
