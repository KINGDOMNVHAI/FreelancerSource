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
                        <div class="col-md-2">
                            <div class="form-group">
                                <input type="text" name="name_post" id="name_post" class="form-control" placeholder="Tên bài viết">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="dropdown bootstrap-select show-tick">
                                <select class="selectpicker" name="year" id="year" data-style="select-with-transition" title="Năm">
                                    <option value="all">Tất cả năm</option>
                                    @for($i=2015;$i<=$currentyear;$i++)
                                    <option value="{{$i}}" <?php echo (isset($_GET['year']) && $_GET['year'] == $i) ? 'selected' : '' ?>>{{$i}}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="dropdown bootstrap-select show-tick">
                                <select class="selectpicker" name="month" id="month" data-style="select-with-transition" title="Tháng">
                                    <option value="all">Tất cả tháng</option>
                                    @for($i=1;$i<=12;$i++)
                                    <option value="{{$i}}" <?php echo (isset($_GET['month']) && $_GET['month'] == $i) ? 'selected' : '' ?>>{{$i}}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="dropdown bootstrap-select show-tick">
                                <select class="selectpicker" name="newold" id="newold" data-style="select-with-transition" title="Mới / Cũ" data-size="7" tabindex="-98">
                                    <option value="desc" <?php echo (isset($_GET['newold']) && $_GET['newold'] == 'desc') ? 'selected' : '' ?>>Mới nhất </option>
                                    <option value="asc" <?php echo (isset($_GET['newold']) && $_GET['newold'] == 'asc') ? 'selected' : '' ?>>Cũ nhất</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="dropdown bootstrap-select show-tick">
                                <select class="selectpicker" name="idCat" id="idCat" data-style="select-with-transition" title="Chuyên mục" data-size="7" tabindex="-98">
                                    <option value="all">Tất cả chuyên mục</option>
                                    @foreach($categories as $category)
                                    <option value="{{$category->id_cat_post}}">{{$category->name_cat_post}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="dropdown bootstrap-select show-tick">
                                <button class="btn btn-primary"><i class="fa fa-search"></i> Search</button>
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
                                        <!-- <td><center><input type="checkbox" name="checkbox{{ $category->id_cat }}" ></center></td> -->
                                        <td>{{ $category->name_cat }}</td>
                                        <td class="text-center">{{ $category->url_cat }}</td>
                                        @if ($category->enable_cat == 1)
                                        <td class="text-center">Hoạt động</td>
                                        @else
                                        <td class="text-center">Không hoạt động</td>
                                        @endif
                                        <td class="td-actions">
                                            <button type="button" rel="tooltip" class="btn btn-success" data-original-title="" onclick="window.location = '{{ route('category-update', $category->id_cat) }}'">
                                                <i class="material-icons">edit</i>
                                            </button>
                                            <button type="button" rel="tooltip" class="btn btn-danger" data-original-title="" onclick="window.location = '/fastfood/category-return/' + {{ $category->id_cat }}">
                                                <i class="material-icons">subdirectory_arrow_left</i>
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
@stop
