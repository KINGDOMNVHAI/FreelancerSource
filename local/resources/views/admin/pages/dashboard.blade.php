@extends("admin.index")

@section("content")

<div class="content">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <?php
                $count = 1;
                $color = 'card-header-warning';
                $icon = 'equalizer';
                ?>

                @foreach($categories as $category)

                    <?php
                    switch ($count) {
                        case "1":
                            $color = "card-header-warning";
                            $icon = 'equalizer';
                            break;
                        case "2":
                            $color = 'card-header-rose';
                            $icon = 'skip_next';
                            break;
                        case "3":
                            $color = 'card-header-success';
                            $icon = 'videogame_asset';
                            break;
                        case "4":
                            $color = 'card-header-info';
                            $icon = 'mouse';
                            break;
                        default:
                            $color = 'card-header-warning';
                            $icon = 'equalizer';
                    }

                    if ($count == 4)
                    {
                        $count = 1;
                    }
                    else
                    {
                        $count++;
                    }

                    ?>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-header {{$color}} card-header-icon">
                                <div class="card-icon">
                                    <i class="material-icons">{{$icon}}</i>
                                </div>
                                <p class="card-category">{{$category->name_cat_product}}</p>
                                <h3 class="card-title">{{$category->count_product}}</h3>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <i class="material-icons text-danger">search</i>
                                    <a href="{{route('post-index')}}?&name_detailpost=&year=&month=&newold=&idCat={{$category->id_cat_product}}">Danh sách tất cả sản phẩm</a>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>
    </div>
</div>

@stop
