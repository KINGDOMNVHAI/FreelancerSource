@extends("backend.master-backend")
@section("NoiDung")

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">List Post</h1>
<p class="mb-4">Lấy dữ liệu từ database</p>

<a href="{{route('create-post')}}" class="btn btn-success pull-right">Add New Post</a><br><br>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">List Post</h6>
    </div>
    <div class="card-body" id="app">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Edit | Delete</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Edit | Delete</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($listpost as $post)
                    <tr>
                        <td>{{ $post->id_post }}</td>
                        <td>{{ $post->name_post }}</td>
                        <td><img src="{{ asset('upload/' . $post->thumbnail_post) }}" width="150px;"></td>
                        <td>
                            <a href="{{route('update', $post->url_post)}}" class="btn btn-primary">Edit</a> ||
                            <a href="{{route('delete', $post->url_post)}}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
