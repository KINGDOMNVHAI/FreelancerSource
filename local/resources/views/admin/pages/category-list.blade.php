@extends("admin.index")

@section("content")
<div class="content">
    <div id="loading" style="display:none;position: absolute;width: 100%;height: 100%;top: 0;left: 0;right: 0;bottom: 0;
    background-color: rgba(255,255,255,0.6);z-index: 999;cursor: pointer;">
        <img src="{{ asset('/admin/assets/img/ajax-loading.gif') }}"style="padding-top:30%; padding-left:45%">
    </div>

    <div class="container-fluid">
        <form>
        {!! csrf_field() !!}
        <div class="row">
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header card-header-rose card-header-text">
                        <div class="card-icon">
                        <i class="material-icons">library_books</i>
                        </div>
                        <h4 class="card-title">Tìm kiếm</h4>
                    </div>
                    <div class="card-body row">
                        <div class="col-md-10">
                            <div class="form-group">
                                <input type="text" name="keyword" id="keyword" class="form-control" placeholder="Tên chuyên mục">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="dropdown bootstrap-select show-tick">
                                <button class="btn btn-primary"><i class="fa fa-search"></i> Tìm kiếm</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>

        <div class="row">
            <div class="col-md-6">
                <div class="card-body">
                    <!-- <button class="btn btn-info" onclick="window.location = '/san-pham/danh-sach-san-pham-da-xoa';">Xóa nhiều bài viết</button>

                    <button class="btn btn-success">Success</button>
                    <button class="btn btn-warning">Warning</button>
                    <button class="btn btn-danger">Danger</button> -->
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-icon card-header-rose">
                        <div class="card-icon">
                            <i class="material-icons">assignment</i>
                        </div>
                        <h4 class="card-title ">Danh sách chuyên mục</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <tr>
                                        <!-- <th class="text-center" style="width: 5%">Checkbox</th> -->
                                        <th>Tiêu đề</th>
                                        <th class="text-center" style="width: 20%">URL</th>
                                        <th class="text-center" style="width: 10%">Hoạt động</th>
                                        <th>Chỉnh sửa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $category)
                                    <tr>
                                        <!-- <td><center><input type="checkbox" name="checkbox{{ $category->id_cat_product }}" ></center></td> -->
                                        <td>{{ $category->name_cat_product }}</td>
                                        <td class="text-center">{{ $category->url_cat_product }}</td>
                                        @if ($category->enable_cat_product == 1)
                                        <td class="text-center">Hoạt động</td>
                                        @else
                                        <td class="text-center">Không hoạt động</td>
                                        @endif
                                        <td class="td-actions">
                                            <button type="button" rel="tooltip" class="btn btn-success" data-original-title="" onclick="window.location = '{{ route('category-update', $category->id_cat_product) }}'">
                                                <i class="material-icons">edit</i>
                                            </button>
                                            <button type="button" rel="tooltip" class="btn btn-danger" data-original-title="" onclick="window.location = '/bookstore/category-delete/' + {{ $category->id_cat_product }}">
                                                <i class="material-icons">close</i>
                                                <div class="ripple-container"></div>
                                            </button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                    </div>
                </div>

            </div>
        </div>
        {!! $categories->links('pagination::bootstrap-4') !!}
    </div>
</div>

<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript">
    $(function() {
        $("#datepicker1").datetimepicker();
    });
</script> -->

<script type="text/javascript">
$(document).ready(function () {
    $(document).ajaxStart(function () {
        $("#loading").show();
    }).ajaxStop(function () {
        $("#loading").hide();
    });
});
function edit_category_ajax(id_post)
{
    var idcategory = "id_category" + id_post;

    var e = document.getElementById(idcategory);
    var id_category = e.options[e.selectedIndex].value;

    console.log(id_category);
    console.log(id_post);

    // console.log(document.getElementById('id_category').value);

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        type:'POST',
        dataType: 'JSON',
        url: '<?php echo route('posts-change-category-ajax'); ?>',
        data:{
            id_category:id_category,
            id_post:id_post
        },
        success:function(data){
            alert('Cập nhật thành công!');
        },
        error:function(xhr, data){
            console.log(xhr);
        }
    });
}
</script>

<!-- Fix images product size -->
<style>
    .img-container img {
        width: 70%;
    }

    @media (max-width: 700px) {
        .img-container img {
            width: 100%;
        }
    }
</style>
@stop
